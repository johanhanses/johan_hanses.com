<x-layouts.app>
    <div class="max-w-lg mx-auto p-6">
        <x-links />

        <div class="space-y-4">
            <address>
                <a href="mailto:johanhanses@gmail.com" target="_blank" class="flex hover:text-gray-400 transition-colors duration-300 not-italic">
                    <x-email class="h-6 w-6 mr-4" />

                    johanhanses@gmail.com
                </a>
            </address>

            <article class="flex">
                <x-info class="h-6 w-6 mr-4 flex-shrink-0" />

                <div class="space-y-2 leading-relaxed">
                    <p>
                        Laravel and JavaScript fullstack developer based in Falun, Sweden. Coding web stuff at
                        <a href="https://panang.se" target="_blank" class="underline hover:text-gray-400 transition-colors duration-300">
                            Panang.
                        </a>
                    </p>
                </div>
            </article>
        </div>
    </div>
</x-layouts.app>