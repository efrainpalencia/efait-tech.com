@extends('layouts.main')

@section('title', 'About EFAITECH SOLUTIONS')

@section('content')

    <!-- Hero Section -->
    <section class="relative py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h1 class="text-5xl font-extrabold leading-tight">
                Empowering Businesses with Full-Stack Innovation
            </h1>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed">
                At <span class="text-sky-400">EFAITECH SOLUTIONS</span>, we deliver future-ready software solutions that
                drive growth, automate workflows, and solve real-world problems. From frontend experiences to backend
                systems, we build the technology that powers tomorrow's businesses.
            </p>
            <a href="#contact"
                class="mt-10 inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Book a Call
            </a>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-20 bg-white text-gray-900">
        <div class="container mx-auto px-6 max-w-5xl text-center">
            <h2 class="text-4xl font-bold mb-12">
                Who We Are
            </h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                <span class="font-semibold">EFAITECH SOLUTIONS LLC</span> is a full-stack software development company led
                by Efrain, a passionate engineer dedicated to delivering scalable, secure, and high-performing digital
                products.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                We specialize in turning ideas into seamless web and mobile applications through modern technologies,
                AI-powered automation, and robust backend architecture. Our goal is to help businesses—whether startups or
                enterprises—unlock new levels of efficiency and growth.
            </p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gray-100 text-gray-900">
        <div class="container mx-auto px-6 max-w-5xl text-center">
            <div class="grid gap-12 md:grid-cols-2">
                <!-- Mission -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Our Mission</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To empower businesses with innovative, full-stack software solutions that enhance productivity,
                        streamline operations, and create seamless digital experiences.
                    </p>
                </div>
                <!-- Vision -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        To become a trusted technology partner, delivering scalable, end-to-end solutions that turn complex
                        challenges into simple, impactful results.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-4xl font-bold mb-6">
                Let's Build Something Great Together
            </h2>
            <p class="text-lg text-gray-300 leading-relaxed mb-8">
                Ready to take your business to the next level? Schedule a call to explore how our full-stack expertise can
                turn your vision into reality.
            </p>
            <a href="mailto:contact@efaitechsolutions.com"
                class="inline-block rounded-lg bg-sky-400 px-8 py-4 text-lg font-medium text-white hover:bg-sky-500 transition">
                Book a Call
            </a>
        </div>
    </section>

@endsection