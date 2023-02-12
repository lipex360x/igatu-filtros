// const Email = 

export default class SendEmail {
  constructor() {
    this.execute()
  }

  execute = () => {
    const contactFormSubmit = document.getElementById('contact-form-submit');
    contactFormSubmit.addEventListener('click', this.validateForm);
  }

  validateForm = (event) => {
    event.preventDefault()
    event.stopPropagation()

    Email.send({
      Host : "mail.igatufiltros.com.br",
      Username : "igatu@igatufiltros.com.br",
      Password : "igatu@Igatu#17",
      To : 'comercial@igatufiltros.com.br',
      From : "lipex360@gmail.com",
      Subject : "This is the subject",
      Body : "And this is the body"
    }).then(
      message => alert(message)
    );

    return

    var form = document.querySelector('form');
    var formData = new FormData(form);

    console.log('lkjsdf', formData)
  
    for (const [key, value] of formData) {
      console.log(key, value)
    }

    //Full name
    const fullName = document.getElementById('full-name') !== null 
      ? document.getElementById('full-name').value 
      : '';

    //Email
    const email = document.getElementById('email') !== null 
      ? document.getElementById('email').value 
      : '';

    //Message
    const message = document.getElementById('message') !== null 
      ? document.getElementById('message').value 
      : '';

    const validationMessages = [];

    if (fullName.length === 0) validationMessages.push('Please enter a valid name.')
    if (email.length === 0 || !this.emailIsValid(email)) validationMessages.push('Please enter a valid email address.')
    if (message.length === 0) validationMessages.push('Please enter a valid message.')

    console.log('preventDefault', validationMessages)
  }

  emailIsValid = (email) => {
    const regex = /\S+@\S+\.\S+/;
    return regex.test(email); 
  }
}