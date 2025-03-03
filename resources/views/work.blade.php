@extends('layouts.main')

@section('title', 'Our Work')

@section('content')

    <!-- Hero Section -->
    <section class="py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h1 class="text-5xl font-extrabold leading-tight">
                See What We've Built
            </h1>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                Explore some of our recent projects where we’ve delivered full-stack solutions, integrated AI, and built
                modern web and mobile applications for businesses that are ready to grow.
            </p>
        </div>
    </section>

    <!-- Work Showcase -->
    <section class="py-20 bg-white text-gray-900">
        <div class="container mx-auto px-6 max-w-6xl">
            <h2 class="text-4xl font-bold text-center mb-12">
                Featured Projects
            </h2>
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">

                <!-- Project 1 -->
                <div class="bg-white border rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('work-images/ai-recipe-generator.up.railway.app.jpeg') }}" alt="AI Chef"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">AI Chef</h3>
                        <p class="text-gray-700">
                            An AI-powered recipe generator that creates custom meal ideas based on ingredients, servings,
                            and cuisine preferences using OpenAI’s ChatGPT.
                        </p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white border rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('work-images/ai-voice-qa-poker-rules.up.railway.app.jpeg') }}"
                        alt="AI Poker Rules Assistant" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">AI Pocket Poker Pal</h3>
                        <p class="text-gray-700">
                            A voice-powered AI assistant using ChatGPT and Whisper to deliver real-time poker rule guidance
                            with RAG-enhanced fine-tuning.
                        </p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white border rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('work-images/Main Screen.jpeg') }}" alt="Virtue Health"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">Virtue Health</h3>
                        <p class="text-gray-700">
                            A complete virtual health platform that allows patients to book, manage, and join secure video
                            appointments while automating scheduling for providers.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-4xl font-bold mb-6">
                Let’s Build Something Great Together
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed mb-8">
                Have an idea you want to bring to life? Let's collaborate and create a full-stack solution tailored to your
                business.
            </p>
            <a href="mailto:efrain@efaitechsolutions.com"
                class="inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Get in Touch
            </a>
        </div>
    </section>

@endsection