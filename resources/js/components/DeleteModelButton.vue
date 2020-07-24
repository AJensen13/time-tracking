<template>
    <button @click="reveal" class="w-16 h-16 transition duration-100 ease-linear rounded-md bg-red-400 transform hover:scale-105">
        <i class="fas fa-trash fa-2x text-white"></i>
    </button>
</template>

<script>
    export default {
        props: [
            'modalId'
        ],
        methods: {
            reveal: function() {
                $('#' + this.modalId).toggleClass('hidden');
                $('#body').toggleClass(['bg-gray-500', 'bg-opacity-50']);
            }
        }
    }
</script>
