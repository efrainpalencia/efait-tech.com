@extends('layouts.main')

@section('title', 'EFAITECH SOLUTIONS | Full-Stack Software Solutions')

@section('content')

    <!-- Hero Section -->
    <section class="relative py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h1 class="text-5xl font-extrabold leading-tight">
                Future-Ready Full-Stack Solutions for Growing Businesses
            </h1>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                We design and build scalable, high-performance web and mobile applications that help businesses automate
                processes, increase productivity, and unlock growth.
            </p>
            <a href="#contact"
                class="mt-10 inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Book a Call
            </a>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-20 bg-white text-gray-900">
        <div class="container mx-auto px-6 max-w-6xl text-center">
            <h2 class="text-4xl font-bold mb-12">
                What We Do
            </h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Full-Stack Development</h3>
                    <p class="text-gray-600">
                        We build end-to-end web and mobile applications using modern technologies, delivering seamless
                        frontend and robust backend systems.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Automation & AI Integration</h3>
                    <p class="text-gray-600">
                        We streamline business processes and integrate intelligent systems to enhance workflows and maximize
                        efficiency.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Cloud & API Solutions</h3>
                    <p class="text-gray-600">
                        From scalable cloud deployments to custom API development, we ensure your systems are secure,
                        connected, and reliable.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="py-20 bg-white text-gray-900">
        <div class="container mx-auto px-6 max-w-6xl">
            <h2 class="text-4xl font-bold text-center mb-12">
                Case Studies
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

    <!-- Contact CTA (optional for the "Book a Call" target) -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed mb-8">
                Let’s discuss how EFAITECH SOLUTIONS can bring your ideas to life with full-stack innovation.
            </p>
            <a href="mailto:contact@efaitechsolutions.com"
                class="inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Schedule a Call
            </a>
        </div>
    </section>

@endsection