<template>
    <button @click="submit" class="transition duration-100 ease-linear rounded-sm bg-blue-800 p-3 md:w-1/4 self-end transform hover:scale-105">
        <i class="fas fa-save fa-lg text-white"> Submit</i>
    </button>
</template>

<script>
    export default {
        props: [
            'formId'
        ],
        methods: {
            submit: function() {
                let form = document.getElementById(this.formId);

            }
        }
    }
</script>
