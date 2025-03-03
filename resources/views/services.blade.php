@extends('layouts.main')

@section('title', 'Our Services')

@section('content')

    <!-- Hero Section -->
    <section class="py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h1 class="text-5xl font-extrabold leading-tight">
                Full-Stack Software Solutions Designed to Scale
            </h1>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                We provide end-to-end software development services that help businesses innovate, automate, and grow. From
                frontend experiences to backend systems, we build reliable, scalable, and secure technology tailored to your
                needs.
            </p>
            <a href="#contact"
                class="mt-10 inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Book a Call
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white text-gray-900">
        <div class="container mx-auto px-6 max-w-6xl">
            <h2 class="text-4xl font-bold text-center mb-12">
                What We Offer
            </h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Full-Stack Development -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Full-Stack Development</h3>
                    <p class="text-gray-700">
                        Complete web and mobile app development from frontend design to backend architecture using modern
                        frameworks like React, Vue, Node.js, and more.
                    </p>
                </div>

                <!-- API & Cloud Solutions -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">API & Cloud Solutions</h3>
                    <p class="text-gray-700">
                        We build robust APIs and deploy scalable cloud infrastructures using AWS, Azure, and Google Cloud to
                        ensure high performance and security.
                    </p>
                </div>

                <!-- Automation & AI Integration -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Automation & AI Integration</h3>
                    <p class="text-gray-700">
                        We integrate smart automation tools and AI-driven solutions to streamline your business operations
                        and increase efficiency.
                    </p>
                </div>

                <!-- UI/UX Design -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">UI/UX Design</h3>
                    <p class="text-gray-700">
                        Beautiful, responsive, and user-friendly interfaces designed to enhance user experience and maximize
                        engagement.
                    </p>
                </div>

                <!-- Database Architecture -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Database Architecture</h3>
                    <p class="text-gray-700">
                        Scalable and secure database design with both relational (SQL) and NoSQL systems to support your
                        application's growth.
                    </p>
                </div>

                <!-- Maintenance & Support -->
                <div class="p-6 border rounded-lg shadow">
                    <h3 class="text-2xl font-semibold mb-4">Maintenance & Support</h3>
                    <p class="text-gray-700">
                        Ongoing updates, monitoring, and optimization to keep your systems running at peak performance.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Build Your Next Big Idea?
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed mb-8">
                Let's collaborate to create scalable, modern software solutions tailored for your business.
            </p>
            <a href="mailto:efrain@efaitechsolutions.com"
                class="inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Book a Call
            </a>
        </div>
    </section>

@endsection