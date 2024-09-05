document.addEventListener('DOMContentLoaded', function () {
    const inappropriateWords = [
        'merde', 'con', 'connard', 'connasse', 'putain', 'salope', 'salaud', 'enculé', 'baise', 'nique',
        'asshole', 'bitch', 'bastard', 'fuck', 'shit', 'cunt', 'motherfucker', 'dick', 'pussy'
    ];

    const textFields = document.querySelectorAll('input[type="text"], textarea');

    function checkForInappropriateWords(event) {
        const value = event.target.value.toLowerCase();
        for (const word of inappropriateWords) {
            if (value.includes(word)) {
                event.target.setCustomValidity('Ce champ contient des mots inappropriés.');
                event.target.reportValidity();
                return;
            }
        }
        event.target.setCustomValidity('');
    }

    textFields.forEach(field => {
        field.addEventListener('input', checkForInappropriateWords);
    });

    const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');
    requiredFields.forEach(field => {
        const small = document.createElement('small');
        small.textContent = '*obligatoire*';
        small.classList.add('obligatoire');

        if (field.parentElement.id === 'phone-wrapper' || field.parentElement.id === 'work-phone-wrapper') {
            field.parentElement.parentNode.insertBefore(small, field.parentElement.nextSibling);
        } else {
            field.parentNode.insertBefore(small, field.nextSibling);
        }
    });

    const countrySelect = document.getElementById('country');
    const regionSelect = document.getElementById('region');
    const departmentSelect = document.getElementById('department');
    const citySelect = document.getElementById('city');
    const zipcodeInput = document.getElementById('zipcode');
    const shoeSizeSelect = document.getElementById('shoeSize');

    countrySelect.addEventListener('change', function () {
        const selectedCountry = countrySelect.value;
        if (selectedCountry) {
            fetch('https://geo.api.gouv.fr/regions')
                .then(response => response.json())
                .then(data => {
                    updateOptions(regionSelect, data, 'nom');
                    if (regionSelect.value) {
                        regionSelect.dispatchEvent(new Event('change'));
                    }
                });
        } else {
            updateOptions(regionSelect, []);
            regionSelect.dispatchEvent(new Event('change'));
        }
    });

    regionSelect.addEventListener('change', function () {
        const selectedRegion = regionSelect.value;
        if (selectedRegion) {
            fetch(`https://geo.api.gouv.fr/regions/${selectedRegion}/departements`)
                .then(response => response.json())
                .then(data => {
                    updateOptions(departmentSelect, data, 'nom');
                    if (departmentSelect.value) {
                        departmentSelect.dispatchEvent(new Event('change'));
                    }
                });
        } else {
            updateOptions(departmentSelect, []);
            departmentSelect.dispatchEvent(new Event('change'));
        }
    });

    departmentSelect.addEventListener('change', function () {
        const selectedDepartment = departmentSelect.value;
        if (selectedDepartment) {
            fetch(`https://geo.api.gouv.fr/departements/${selectedDepartment}/communes`)
                .then(response => response.json())
                .then(data => {
                    updateOptions(citySelect, data, 'nom');
                    if (citySelect.value) {
                        citySelect.dispatchEvent(new Event('change'));
                    }
                });
        } else {
            updateOptions(citySelect, []);
            citySelect.dispatchEvent(new Event('change'));
        }
    });

    citySelect.addEventListener('change', function () {
        const selectedCity = citySelect.value;
        if (selectedCity) {
            fetch(`https://geo.api.gouv.fr/communes/${selectedCity}`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.codesPostaux) {
                        zipcodeInput.value = data.codesPostaux[0];
                    }
                });
        } else {
            zipcodeInput.value = '';
        }
    });

    function updateOptions(selectElement, options, property) {
        selectElement.innerHTML = '';
        if (options.length > 0) {
            options.forEach(function (option) {
                const newOption = document.createElement('option');
                newOption.value = option.code || option.nom;
                newOption.textContent = option[property];
                selectElement.appendChild(newOption);
            });
        }
    }

    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.textContent = 'Sélectionnez votre pointure';
    shoeSizeSelect.appendChild(defaultOption);

    for (let size = 32; size <= 58; size += 0.5) {
        const option = document.createElement('option');
        option.value = size;
        option.textContent = size;
        shoeSizeSelect.appendChild(option);
    }

    function formatPhoneNumber(phoneNumber) {
        phoneNumber = phoneNumber.replace(/\s+/g, '');

        if (phoneNumber.startsWith('0')) {
            phoneNumber = phoneNumber.slice(1);
        }

        phoneNumber = phoneNumber.slice(0, 12);

        return phoneNumber.replace(/(\d)(?=(\d{2})+(?!\d))/g, '$1 ');
    }

    function validatePhoneNumber(event) {
        const value = event.target.value.replace(/\s+/g, '');
        if (value.startsWith('0')) {
            event.target.setCustomValidity('Le numéro ne peut pas commencer par 0.');
        } else {
            event.target.setCustomValidity('');
        }
        event.target.reportValidity();
    }

    const phoneInput = document.getElementById('phone');
    const workPhoneInput = document.getElementById('workPhone');

    phoneInput.addEventListener('input', function (event) {
        let formattedNumber = formatPhoneNumber(event.target.value);
        event.target.value = formattedNumber;
        validatePhoneNumber(event);
    });

    workPhoneInput.addEventListener('input', function (event) {
        let formattedNumber = formatPhoneNumber(event.target.value);
        event.target.value = formattedNumber;
        validatePhoneNumber(event);
    });
});

function handleSubmit(event) {
    event.preventDefault();
    const formData = new FormData(event.target);

    document.querySelector('.error-message').textContent = '';
    document.querySelectorAll('.obligatoire').forEach(small => small.classList.remove('error-label'));

    let formIsValid = true;
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
        if (!field.value) {
            formIsValid = false;
            field.nextElementSibling.classList.add('error-label');
        }
    });

    if (!formIsValid) {
        document.querySelector('.error-message').textContent = 'Veuillez remplir tous les champs obligatoires.';
        return;
    }

    const date = new Date(formData.get('Date de naissance'));
    const formattedDate = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
    formData.set('Date de naissance', formattedDate);

    const resultContainer = document.querySelector('.result-container');
    const resultContent = document.querySelector('.result-content');
    resultContent.innerHTML = '';

    const submissionDate = new Date();
    const submissionDateString = `${submissionDate.getDate()}/${submissionDate.getMonth() + 1}/${submissionDate.getFullYear()} ${submissionDate.getHours()}:${submissionDate.getMinutes()}:${submissionDate.getSeconds()}`;

    const dateP = document.createElement('p');
    dateP.textContent = `Date et heure de soumission: ${submissionDateString}`;
    resultContent.appendChild(dateP);

    const personalInfo = document.createElement('div');
    personalInfo.classList.add('result-section');
    personalInfo.innerHTML = '<h3>Informations Personnelles</h3>';
    resultContent.appendChild(personalInfo);

    const contactInfo = document.createElement('div');
    contactInfo.classList.add('result-section');
    contactInfo.innerHTML = '<h3>Coordonnées</h3>';
    resultContent.appendChild(contactInfo);

    const professionalInfo = document.createElement('div');
    professionalInfo.classList.add('result-section');
    professionalInfo.innerHTML = '<h3>Informations Professionnelles</h3>';
    resultContent.appendChild(professionalInfo);

    const medicalInfo = document.createElement('div');
    medicalInfo.classList.add('result-section');
    medicalInfo.innerHTML = '<h3>Informations Médicales</h3>';
    resultContent.appendChild(medicalInfo);

    let phoneNumber = '';
    let workPhoneNumber = '';

    formData.forEach((value, key) => {
        const p = document.createElement('p');
        if (key === 'Téléphone') {
            const phoneCountry = formData.get('Indicatif');
            phoneNumber = `${phoneCountry} ${value}`;
            p.textContent = `${key}: ${phoneNumber}`;
            contactInfo.appendChild(p);
        } else if (key === 'Téléphone Professionnel') {
            const workPhoneCountry = formData.get('Indicatif Professionnel');
            workPhoneNumber = `${workPhoneCountry} ${value}`;
            p.textContent = `${key}: ${workPhoneNumber}`;
            professionalInfo.appendChild(p);
        } else {
            if (key === 'Genre') {
                p.textContent = `${key}: ${value === 'male' ? 'Homme' : value === 'female' ? 'Femme' : 'Autre'}`;
            } else if (key === 'Taille (cm)') {
                p.textContent = `${key}: ${value} cm`;
            } else if (key === 'Poids (kg)') {
                p.textContent = `${key}: ${value} kg`;
            } else if (key === 'Pointure (EUR)') {
                p.textContent = `${key}: ${value} EUR`;
            } else if (key === 'Région' || key === 'Département' || key === 'Ville') {
                const select = document.querySelector(`[name="${key}"]`);
                const option = select.querySelector(`option[value="${value}"]`);
                p.textContent = `${key}: ${option ? option.textContent : value}`;
            } else {
                p.textContent = `${key}: ${value}`;
            }

            if (['Prénom', 'Nom', 'Date de naissance', 'Genre', 'Nationalité', 'Taille (cm)', 'Poids (kg)', 'Pointure (EUR)'].includes(key)) {
                personalInfo.appendChild(p);
            } else if (['Email', 'Téléphone', 'Adresse', 'Pays', 'Région', 'Département', 'Ville', 'Code postal'].includes(key)) {
                contactInfo.appendChild(p);
            } else if (['Profession', 'Entreprise', 'Email Professionnel', 'Téléphone Professionnel', 'Adresse Professionnelle'].includes(key)) {
                professionalInfo.appendChild(p);
            } else if (['Groupe sanguin', 'Allergies', 'Médicaments', 'Conditions de santé'].includes(key)) {
                medicalInfo.appendChild(p);
            }
        }
    });

    const lastName = formData.get('Nom').toUpperCase();
    const firstName = formData.get('Prénom').charAt(0).toUpperCase() + formData.get('Prénom').slice(1);
    const fileName = `${lastName}_${firstName}.txt`;

    const saveButton = document.createElement('button');
    saveButton.textContent = 'Enregistrer';
    saveButton.addEventListener('click', function () {
        const textContent = Array.from(formData.entries())
            .map(([key, value]) => {
                if (key === 'Téléphone') {
                    return `${key}: ${phoneNumber}`;
                } else if (key === 'Téléphone Professionnel') {
                    return `${key}: ${workPhoneNumber}`;
                } else if (key === 'Genre') {
                    return `${key}: ${value === 'male' ? 'Homme' : value === 'female' ? 'Femme' : 'Autre'}`;
                } else if (key === 'Taille (cm)') {
                    return `${key}: ${value} cm`;
                } else if (key === 'Poids (kg)') {
                    return `${key}: ${value} kg`;
                } else if (key === 'Pointure (EUR)') {
                    return `${key}: ${value} EUR`;
                } else if (key === 'Région' || key === 'Département' || key === 'Ville') {
                    const select = document.querySelector(`[name="${key}"]`);
                    const option = select.querySelector(`option[value="${value}"]`);
                    return `${key}: ${option ? option.textContent : value}`;
                } else {
                    return `${key}: ${value}`;
                }
            })
            .join('\n');
        const blob = new Blob([textContent], { type: 'text/plain' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = fileName;
        link.click();
    });

    resultContent.appendChild(saveButton);

    document.querySelector('.form-container').style.display = 'none';
    resultContainer.style.display = 'block';
}

function fillAllFields() {
    document.getElementById('firstName').value = 'John';
    document.getElementById('lastName').value = 'Doe';
    document.getElementById('dob').value = '1990-01-01';
    document.getElementById('gender').value = 'male';
    document.getElementById('nationality').value = 'Français';
    document.getElementById('height').value = '180';
    document.getElementById('weight').value = '75';
    document.getElementById('shoeSize').value = '42';
    document.getElementById('email').value = 'john.doe@example.com';
    document.getElementById('phoneCountry').value = '+33';
    document.getElementById('phone').value = '681040835';
    document.getElementById('address').value = '123 Rue Exemple';
    document.getElementById('country').value = 'France';
    document.getElementById('country').dispatchEvent(new Event('change'));
    document.getElementById('region').value = '11';
    document.getElementById('region').dispatchEvent(new Event('change'));
    document.getElementById('department').value = '75';
    document.getElementById('department').dispatchEvent(new Event('change'));
    document.getElementById('city').value = 'Paris';
    document.getElementById('zipcode').value = '75000';
    document.getElementById('occupation').value = 'Developer';
    document.getElementById('company').value = 'Example Inc.';
    document.getElementById('workEmail').value = 'john.doe@workexample.com';
    document.getElementById('workPhoneCountry').value = '+33';
    document.getElementById('workPhone').value = '612345678';
    document.getElementById('workAddress').value = '456 Rue Professionnelle';
    document.getElementById('bloodType').value = 'O+';
    document.getElementById('allergies').value = 'None';
    document.getElementById('medications').value = 'None';
    document.getElementById('healthConditions').value = 'None';
}