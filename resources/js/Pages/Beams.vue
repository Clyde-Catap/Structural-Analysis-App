<script setup>

</script>


<template>
    <div class="container mx-auto px-4 grid-rows-3 gap-4 h-[750px] flex justify-center items-center">
        <div class="size-11/12">
            <div class="flex flex-row bg-gray-200 justify-center items-center h-5/6">
                <div class="text-2xl text-center">GRAPH PART</div>
            </div>
            <div class="flex flex-row justify-center items-center space-x-4 p-8">
                <input type="text" class="input text-center" placeholder="Load 1">
                <input type="text" class="input text-center" placeholder="Load 2">
                <input type="text" class="input text-center" placeholder="Load 3">
                <input type="text" class="input text-center" placeholder="Load 4">
                <input type="text" class="input text-center" placeholder="Load 5">
                <input type="text" class="input text-center" placeholder="Load 6">
            </div>
            <div id="reactions" class="grid grid-cols-2 gap-x-12">
                <div class="flex flex-col text-lg text-center">
                    <div>Reaction at Origin: </div>
                </div>
                <div class="flex flex-col text-lg text-center">
                    <div>Reaction at End: </div>       
                </div>
            </div>
        </div>
    </div>
</template>

