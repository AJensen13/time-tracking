<template>
    <div @click="show" class="cursor-pointer w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-black border border-grey-darkest rounded shadow p-2 hover:border-green-400">
            <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                    <h5 class="uppercase text-white">{{ name }}</h5>
                    <h3 class="text-3xl text-grey-dark">{{ count }} Active Tasks</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'name',
            'count',
            'redirect'
        ],
        methods: {
            show: function() {
                window.location.replace(this.redirect);
            }
        }
    }
</script>
