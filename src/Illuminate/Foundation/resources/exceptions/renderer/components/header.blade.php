<x-laravel-exceptions-renderer::card>
    <div class="md:flex md:items-center md:justify-between md:gap-2">
        <div>
            <div class="inline-block rounded-full px-3 py-2 bg-red-500/20 dark:bg-red-500/20">
                <span class="text-sm lg:text-base font-bold leading-5 text-red-500 hidden md:inline-block">
                    {{ $exception->class() }}
                </span>
                <span class="text-sm lg:text-base font-bold leading-5 text-red-500 md:hidden">
                    {{ implode(' ', array_slice(explode('\\', $exception->class()), -1)) }}
                </span>
            </div>
            <div class="text-lg lg:text-2xl mt-4 font-semibold text-gray-900 dark:text-white">{{ $exception->message() }}</div>
        </div>
        <div class="md:block md:min-w-64 hidden text-right">
            <div>
                <span class="rounded-full bg-gray-200 px-3 py-2 dark:bg-gray-800 text-sm leading-5 text-gray-900 dark:text-white">
                    {{ $exception->request()->method() }} {{ $exception->request()->httpHost() }}
                </span>
            </div>
            <div class="mt-4 px-4">
                <span class="text-sm text-gray-500 dark:text-gray-400">PHP {{ PHP_VERSION }} — Laravel {{ app()->version() }}</span>
            </div>
        </div>
    </div>
</x-laravel-exceptions-renderer::card>