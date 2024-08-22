document.querySelectorAll(".tel").forEach(input => {
	["input", "focus", "blur"].forEach(event => input.addEventListener(event, mask));
});
 
function mask(event) {
	const matrix = "+7(___)___-__-__";
	let val = this.value.replace(/\D/g, "");
	const def = matrix.replace(/\D/g, "");
	let i = 0;
 
	if (def.length >= val.length) val = def;
 
	this.value = matrix.replace(/./g, a => /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a);
 
	if (val.length === 11 && /^79(\d)\1{8}$/.test(val)) {
	  this.value = "+7";
	}
 
	if (this.value !== "+7(9" && i === 2) {
	  this.value = "+7";
	}
 
	if (event.type === "blur" && this.value.length === 2) {
	  this.value = "";
	} else {
	  this.setSelectionRange(this.value.length, this.value.length);
	}
}
 