const formComponentClass = {
    start: function () {
        this.addNewRequest();
        this.bindAddNewRequest();
        this.bindInputTitle();
        this.send();
    },
    addNewRequest: function (){
        let newElement = document.querySelector('.form__composition-application-item-hidden').cloneNode(true);
        newElement.classList.remove('form__composition-application-item-hidden');
        const wrapper = document.querySelector('.form__composition-application');
        let insertedElement = wrapper.insertBefore(newElement, wrapper.querySelector('.add-new-element-btn'));
        insertedElement.querySelector('.btn-delete-element').addEventListener('click', function () {
            wrapper.removeChild(insertedElement);
        });
    },
    bindAddNewRequest: function () {
        document.querySelector('.add-new-element-btn').addEventListener('click', function () {
            formComponentClass.addNewRequest();
        });
    },
    bindInputTitle: function () {
        const submitBtn = document.querySelector('.form__send-btn');
        document.getElementById('inputTitle').addEventListener('input', function () {
            if(this.value.length){
                this.classList.remove('is-invalid');
                submitBtn.disabled = false;
            } else {
                this.classList.add('is-invalid');
                submitBtn.disabled = true;
            }
        });
    },
    send: function () {
        document.querySelector('.form__form').addEventListener('submit', function (e) {

            const formData = new FormData(e.srcElement);
            const bxFormData = new BX.ajax.FormData();

            for(let [name, value] of formData)
            {
                bxFormData.append(name, value);
            }

            let data = [];

            document.querySelector('.form__composition-application').querySelectorAll('.form__composition-application-item').forEach(item => {
                if(!item.classList.contains('form__composition-application-item-hidden')){
                    let temp = {};
                    item.querySelectorAll('[data-name]').forEach(input => {
                        temp[input.dataset.name] = input.value;
                    });
                    data.push(temp);
                }
            });

            if(data.length){
                bxFormData.append('composition-application', JSON.stringify(data));
            }

            bxFormData.send(
                '/local/components/rusoil/form/templates/.default/sendMessage.php',
                function(data){
                    let response = JSON.parse(data);
                    alert(response['status']);
                },
                null,
                function(error){
                    console.log(`error: ${error}`)
                }
            );

            // console.log(bxFormData);
            e.preventDefault();
        });
    },
};

BX.ready(function () {
    formComponentClass.start();
});