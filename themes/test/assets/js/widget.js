let widgets = function () {
    let callibriScript = document.createElement('script');
    callibriScript.type = 'text/javascript';
    callibriScript.src = '//cdn.callibri.ru/callibri.js';
    callibriScript.charset = 'UTF-8';
    document.body.appendChild(callibriScript);

    let venyooScript = document.createElement('script');
    venyooScript.type = 'text/javascript';
    venyooScript.src = '//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5193569749565440';
    venyooScript.charset = 'UTF-8';
    document.body.appendChild(venyooScript);

    window.removeEventListener('scroll', widgets);
}
window.addEventListener('scroll', widgets);