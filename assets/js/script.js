const deleteUser = document.querySelectorAll(".delete")
console.log(deleteUser)

deleteUser.forEach(element => {
    element.addEventListener("click", function(e){
        const response = confirm("Voulez-vous supprimez ?"); 
        // e.preventDefault()
        document.querySelector(`form_${element.dataset.id}`).submit()
        element.name = response
        console.log(element)
        // console.log(element.dataset.id)
    })
});