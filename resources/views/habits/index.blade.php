<x-app-layout>
    <div class="flex flex-col bg-gray-200 min-h-screen justify-center">
        <div class="flex flex-col bg-white pt-10 pb-8 sm:max-w-lg sm:min-w-[500px] sm:mx-auto px-6 sm:px-10 shadow-xl ring-1 ring-gray-900/10 sm:rounded-xl">
            <div class="flex items-center justify-between">
                <button type="button" class="text-white bg-primar
                <h1 class="text-xl font-semibold">Habit Tracker</h1>
                <button type="button" class="text-white bg-primary-600 px-3.5 py-2 rounded-md">New Habit</button>
            </div>

            <div class="divide-y divide-gray-300/10">
                <div class="text-base leading-7 text-gray-900">
                    <div class="flex items-center py-2.5">
                        <div class="flex basis-1/2 flex-col">
                            <h1 class="text-base font-semibold">Drink water</h1>
                            <small class="font-normal text-gray-400">1 / 3 times</small>
                        </div>
                        <div class="flex basis-1/4 justify-center p-2.5">
                            <button class="text-white bg-primary-600 font-semibold text-2xl px-4 py-2 rounded-lg">
                                + 1
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>