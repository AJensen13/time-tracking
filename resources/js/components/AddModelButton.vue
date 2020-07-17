<template>
    <button @click="reveal" class="w-16 h-16 transition duration-100 ease-linear rounded-md bg-green-400 transform hover:scale-105">
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
                document.getElementById(this.modalId).classList.toggle('hidden');
                document.getElementById('body').classList.toggle('bg-gray-500 bg-opacity-50');
            }
        }
    }
</script>
