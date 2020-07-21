<template>
    <button @click="submit()" type="button" class="transition duration-100 ease-linear rounded-sm bg-blue-800 p-3 md:w-1/4 self-end transform hover:scale-105">
        <i class="fas fa-save fa-lg text-white"> Submit</i>
    </button>
</template>

<script>
    export default {
        props: [
            'formId',
            'submitUrl'
        ],
        methods: {
            submit: function() {
                let data = $('#' + this.formId).serializeArray().reduce(function(obj, item) {
                    obj[item.name] = item.value;
                    return obj;
                }, {});

                this.axios.post(this.submitUrl, data)
                    .then(function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Noice!',
                            text: 'Project saved!',
                        });

                        location.reload();
                    })
                    .catch(function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'shoot',
                            text: error.response.data.message
                        });
                    });
            }
        }
    }
</script>
