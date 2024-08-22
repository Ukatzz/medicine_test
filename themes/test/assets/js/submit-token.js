document.querySelectorAll('form').forEach(function(form) {
    const submitButton = form.querySelector('input[type="submit"]');
    const phoneInput = form.querySelector('input[name="phone"]');

    // Генерация токена при фокусе на поле ввода телефона
    phoneInput.addEventListener('focus', function() {
        generateRecaptchaToken(form);
    });

    // Генерация токена и отправка формы при клике на кнопку отправки
    submitButton.addEventListener('click', function(event) {
        if (!form.querySelector('input[name="grecaptcha"]').value) {
            event.preventDefault(); // Предотвращаем отправку формы до получения токена
            generateRecaptchaToken(form).then(() => {
                form.submit(); // Отправляем форму после получения токена
            });
        }
    });
});

function generateRecaptchaToken(form) {
    return new Promise((resolve) => {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le0uSsqAAAAAGrBrufXHUEdgE9ZuDkb9mSmdQgQ', {action: 'submit'}).then(function(token) {
                form.querySelector('input[name="grecaptcha"]').value = token;
                resolve(token);
            });
        });
    });
}