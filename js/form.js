class account {
    constructor(bankAccount, lastname, firstname, email, phone,depositAccount) {
        this.bankAccount =  bankAccount;
        this.lastname = lastname;
        this.firstname = firstname;
        this.email = email;
        this.phone = phone;
        this.depositAccount = depositAccount;
    }
    showAccount() {
        document.getElementById('accountInput').innerText = "Compte de type " + this.bankAccount;
        document.getElementById('lastNameInput').innerText = "Au nom de " + this.lastname + ' ' + this.firstname;
        document.getElementById('emailInput').innerText = "Email = " + this.email;
        document.getElementById('phoneInput').innerText = "Tel = " + this.phone;
        document.getElementById('depositInput').innerText = "Dépôt = " + this.depositAccount;
    }
}

let button = document.getElementById("buttonNewAccount");
button.addEventListener("click", function() {
    let bankAccountInput =  document.getElementById("compte").value;
    let lastnameInput = document.getElementById("lastName").value;
    let firstnameInput = document.getElementById("firstName").value;
    let emailInput = document.getElementById("email").value;
    let phoneInput = document.getElementById("phone").value;
    let depositAccountInput = document.getElementById("deposit").value;
    let newUserAccount = new account(bankAccountInput, lastnameInput, firstnameInput, emailInput, phoneInput, depositAccountInput);
    newUserAccount.showAccount();
});
