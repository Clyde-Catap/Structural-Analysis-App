<script setup>

</script>


<template>
    <div class="container mx-auto px-4 grid-rows-3 gap-4 h-[750px] flex justify-center items-center">
        <div class="size-11/12">
            <div class="flex flex-row bg-gray-200 justify-center items-center h-5/6 border-double border-4 border-sky-500">
                <div class="text-2xl text-center divide-x divide-blue-700">GRAPH PART</div>
            </div>
            <div class="flex flex-row justify-center items-center space-x-4 p-8">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 1">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 2">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 3">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 4">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 5">
                <input type="text" class="input text-center bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Load 6">
            </div>
            <div id="reactions" class="grid grid-cols-2 gap-x-12">
                <div class="flex flex-col text-lg text-center">
                    <div>
                        Reaction at Origin: <span class="text-red-500">100KN</span>
                    </div>
                </div>
                <div class="flex flex-col text-lg text-center">
                    <div>
                        Reaction at End: <span class="text-red-500">100KN</span>
                    </div>       
                </div>
            </div>
        </div>
    </div>
</template>

