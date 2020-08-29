//class d'instance creates the account object from the form
class account {
    constructor(bankAccount, lastname, firstname, email, phone,depositAccount) {
        this.bankAccount =  bankAccount;
        this.lastname = lastname;
        this.firstname = firstname;
        this.email = email;
        this.phone = phone;
        this.depositAccount = depositAccount;
    }
    //method instance
    showAccount() {
        document.getElementById('accountInput').innerText = "Compte de type " + this.bankAccount;
        document.getElementById('lastNameInput').innerText = "Au nom de " + this.lastname + ' ' + this.firstname;
        document.getElementById('emailInput').innerText = "Email = " + this.email;
        document.getElementById('phoneInput').innerText = "Tel = " + this.phone;
        document.getElementById('depositInput').innerText = "Dépôt = " + this.depositAccount;
    }
}

// on crée un objet qui récupère les value des input
let userAccountForm = {
    // on récupère les valeur des inputs
    dataFormHandling: function() {
        this.bankAccountInput =  document.getElementById("compte").value;
        this.lastnameInput = document.getElementById("lastName").value;
        this.firstnameInput = document.getElementById("firstName").value;
        this.emailInput = document.getElementById("email").value;
        this.phoneInput = document.getElementById("phone").value;
        this.depositAccountInput = document.getElementById("deposit").value;
    },
    //on instancie les valeurs des inputs dans account et on les affiche via showAccount
    newUser: function() {
      this.dataFormHandling();
      let newUserAccount = new account(this.bankAccountInput, this.lastnameInput, this.firstnameInput, this.emailInput, this.phoneInput, this.depositAccountInput );
      newUserAccount.showAccount();
    }
  };
  

let userExemple = new account("PEL", "george", "royce", "exemple@exemple.com", 1, 50);
userExemple.showAccount();

