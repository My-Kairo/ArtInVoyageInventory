const userName = document.querySelector(".username");
const passWord = document.querySelector(".password");
const inputLogs = document.querySelector(".inputlog");
const logbttn = document.querySelector(".logbut");
const form = document.querySelector(".form");
const myError = document.querySelector('.error');
const mySuccess = document.querySelector('.success');


var myDetails = "";


var detailsInstant = detailsAdd(myDetails);


function storing (){
    myError.style.color = "red"
    if(detailsInstant.storeDetails(inputLogs.value)){
        let key = detailsInstant.getDetails();
        return key;
    }else {
        myError.innerHTML = "Enter details";
    }
    
}
detailsAdd(myDetails);
storing ();
logbttn.addEventListener('click', storing);


// form.addEventListener('submit', (e)=>{
//     // alert('click to');
//     myError.style.color = "red";
//     mySuccess.style.color = "green";
//     let messages = "";
//     if(userName.value == '' || passWord == 'null'){
//         messages.push('Field required!');
//     }
//     if(messages.length > 0){
//         e.preventDefault();
//         myError.innerText = messages.join(', ')
//     }

// })






// const submitted = ()=>{
    
//     var usernameValue = userName.value.trim();
//     if(inputLogs.length == 0){
//         myError.innerHTML = "Username required";
//         myError.style.color = 'red';
//         setTimeout(function(){
//             myError.innerHTML = "";
//         }, 4000);
//         return;
//     }
//     else {
//         mySuccess.innerHTML = "Successfully logged in.";
//         mySuccess.style.color = 'green';
//     }
// }
// submitted();


// const setError = (element , message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');
//     const successDisplay = inputControl.querySelector('.success');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');

// }

// const validateInputs = () => {
//     const usernameValue = userName.value.trim();
//     const passwordValue = passWord.value.trim();
//     console.log(usernameValue);
//     console.log(passwordValue);

//     if(usernameValue === ''){
//         setError(userName, 'Username required!');
//     }else{
//         setSuccess(userName);
//     }
//     if(passwordValue === ''){
//         setError(passWord, 'Password required');
//     }else if(passwordValue.length < 8){
//         setError(passWord, 'Password must be atleast 8 and more characters.')
//     }
//     else {
//         setSuccess(passWord);
//     }
// }


