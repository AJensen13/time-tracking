<template>
    <button @click="submit" class="rounded-sm bg-blue-800 p-3 md:w-1/5">
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
                console.log(this.formId);
            }
        }
    }
</script>
