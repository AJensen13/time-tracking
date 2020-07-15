<template>
    <button @click="reveal" class="w-16 h-16 rounded-md bg-green-400">
        <i class="fas fa-plus fa-2x text-white"></i>
    </button>
</template>

<script>
    export default {
        props: [
            'modalId'
        ],
        methods: {
            reveal: function() {
                console.log(this.modalId);
            }
        }
    }
</script>
