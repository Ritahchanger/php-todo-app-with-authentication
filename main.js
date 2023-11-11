const sign_up_form=document.getElementById("sign_up_form");
sign_up_form.addEventListener("submit",(e)=>{

 const fname=document.getElementById("fname").value;
 const sname=document.getElementById("sname").value;
 const idno=document.getElementById("idno").value;
 const email=document.getElementById("email").value;
 const password=document.getElementById("password").value;
 const pass2=document.getElementById("conpasswd").value;
 const fname_error=document.getElementById("fname_error")
 const sname_error=document.getElementById("sname_error")
 const idno_error=document.getElementById("idno_error")
 const email_error=document.getElementById("email_error")
 const password_error=document.getElementById("password_error")
 const confirm_password_error=document.getElementById("confirm_password_error");

 name_validator(fname,fname_error); name_validator(sname,sname_error);idno_validator(idno,idno_error);email_validator(email,email_error);
 password_validator(password,password_error);password_validator(pass2,confirm_password_error)

 if(name_validator(fname,fname_error) && name_validator(sname,sname_error) && idno_validator(idno,idno_error) && email_validator(email,email_error) && password_validator(password,password_error) && password_validator(pass2,confirm_password_error) && password===pass2){
   
 }else{
    e.preventDefault();
    confirm_password_error.style.display="block";
    confirm_password_error.innerText="The passwords should match";
    return false;
 }


});
const name_validator=(name,inputError)=>{
    const nameRegex = /^[A-Za-z\s.'-]+$/;
    if((name.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!nameRegex.test(name)){
        inputError.style.display="block";
        inputError.innerText="Write valid name";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const idno_validator=(idno,inputError)=>{
    if((idno.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(idno.length!=8){
        inputError.style.display="block";
        inputError.innerText="The id no must be 8 digits";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const email_validator=(email,inputError)=>{
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if((email.trim()).length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!emailRegex.test(email)){
        inputError.style.display="block";
        inputError.innerText="Write valid email format";
        return false;
    }else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}
const password_validator=(password,inputError)=>{
    const pattern_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
    if(password.length===0){
        inputError.style.display="block";
        inputError.innerText="Please fill this field";
        return false;
    }else if(!pattern_password.test(password)){
        inputError.style.display="block";
        inputError.innerText="Include uppercase,lowercase and numbers";
        return false;
    }
    else{
        inputError.style.display="none";
        inputError.innerText=" ";
        return true;
    }
}

