let allForms = document.querySelectorAll("form#delete-form")

allForms.forEach(form => {
    
    form.addEventListener('submit', function(e){
        console.log('ok')
        return confirm('Etes-vous sûr de vouloir supprimer?')
    })
    
});
