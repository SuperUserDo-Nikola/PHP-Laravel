<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto border border-gray-300 bg-gray-100 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In</h1>
            <form action="/sessions" method="POST" class="mt-10">
                @csrf
                <x-form.input name="email" type="email"/>

                <x-form.input name="password" type="password"/>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Log In
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
