<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Saifullah - Lead Software Developer | Full-Stack Engineer</title>
    <meta name="description" content="Senior Software Engineer with 9+ years of experience in PHP, Laravel, React.js, AWS, and AI/ML integration. Specializing in scalable cloud-native applications and team leadership.">
    <meta property="og:title" content="Md. Saifullah - Lead Software Developer">
    <meta property="og:description" content="Building scalable, cloud-native solutions for modern businesses. 9+ years of full-stack development expertise.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/1e40af/ffffff?text=Md.+Saifullah">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#0ea5e9',
                        accent: '#8b5cf6'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .skill-tag {
            transition: all 0.2s ease;
        }
        .skill-tag:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #1e40af 0%, #0ea5e9 100%);
            color: white;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold gradient-text">Md.</h1>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition">About</a>
                    <a href="#skills" class="text-gray-700 hover:text-primary transition">Skills</a>
                    <a href="#experience" class="text-gray-700 hover:text-primary transition">Experience</a>
                    <a href="#projects" class="text-gray-700 hover:text-primary transition">Projects</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition">Contact</a>
                </div>
                <button id="mobileMenuBtn" class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-2">
                <a href="#home" class="block text-gray-700 hover:text-primary transition py-2">Home</a>
                <a href="#about" class="block text-gray-700 hover:text-primary transition py-2">About</a>
                <a href="#skills" class="block text-gray-700 hover:text-primary transition py-2">Skills</a>
                <a href="#experience" class="block text-gray-700 hover:text-primary transition py-2">Experience</a>
                <a href="#projects" class="block text-gray-700 hover:text-primary transition py-2">Projects</a>
                <a href="#contact" class="block text-gray-700 hover:text-primary transition py-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <p class="text-secondary font-semibold mb-2">Hello, I'm</p>
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">Md. Saifullah</h1>
                    <h2 class="text-2xl md:text-3xl gradient-text font-semibold mb-4">Lead Software Developer</h2>
                    <p class="text-xl text-gray-600 mb-6">Building Scalable Systems for Modern Businesses</p>
                    <p class="text-gray-700 mb-8 leading-relaxed">9+ years of experience crafting cloud-native applications, leading high-performing teams, and integrating AI/ML solutions for enterprise success.</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">Get In Touch</a>
                        <a href="#projects" class="border-2 border-primary text-primary px-8 py-3 rounded-lg hover:bg-primary hover:text-white transition font-medium">View Projects</a>
                    </div>
                    <div class="flex space-x-6 mt-8">
                        <a href="https://www.linkedin.com/in/saifullah-md/" target="_blank" class="text-gray-600 hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="https://github.com/mdsaif786" target="_blank" class="text-gray-600 hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="mailto:mdsaif9013@gmail.com" class="text-gray-600 hover:text-primary transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="w-80 h-80 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center shadow-2xl">
                        <div class="w-72 h-72 bg-white rounded-full flex items-center justify-center">
                            {{-- <svg class="w-40 h-40 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg> 
                            --}}
                            <img src="/profile.jpeg" alt="Profile Picture" class="w-72 h-72 rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">About Me</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    I'm a results-driven Senior Software Engineer with over 9 years of experience specializing in designing and delivering scalable, cloud-native PHP applications. My expertise spans across full-stack development, AI/ML integration, microservices architecture, and DevOps best practices.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Currently serving as a Senior Software Engineer & Team Lead at Power Cozmo, I manage a 12-member development team building CRM and marketplace platforms for the power generation and energy sector. I've successfully achieved ₹6L monthly cost savings through workflow optimization and maintained 99.99% uptime for mission-critical SaaS platforms.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Beyond technical implementation, I'm passionate about mentoring junior developers, establishing code quality best practices, and driving innovation through agile methodologies. My approach combines strategic thinking with hands-on technical expertise to deliver solutions that align with business objectives.
                </p>
                <div class="grid md:grid-cols-3 gap-6 mt-12">
                    <div class="text-center p-6 bg-blue-50 rounded-lg">
                        <div class="text-4xl font-bold text-primary mb-2">9+</div>
                        <div class="text-gray-600">Years Experience</div>
                    </div>
                    <div class="text-center p-6 bg-blue-50 rounded-lg">
                        <div class="text-4xl font-bold text-primary mb-2">25+</div>
                        <div class="text-gray-600">Projects Delivered</div>
                    </div>
                    <div class="text-center p-6 bg-blue-50 rounded-lg">
                        <div class="text-4xl font-bold text-primary mb-2">12</div>
                        <div class="text-gray-600">Team Members Led</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Technical Skills</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            
            <div class="max-w-6xl mx-auto">
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-800">Core Competencies</h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">💻</div>
                            <div class="font-medium">Full-Stack Development</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🔌</div>
                            <div class="font-medium">REST API Design</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">☁️</div>
                            <div class="font-medium">AWS Cloud Management</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">👥</div>
                            <div class="font-medium">Team Leadership</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🎯</div>
                            <div class="font-medium">Agile/Scrum</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🗄️</div>
                            <div class="font-medium">Database Optimization</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🏗️</div>
                            <div class="font-medium">System Architecture</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">⚡</div>
                            <div class="font-medium">Performance Optimization</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🚀</div>
                            <div class="font-medium">CI/CD Pipeline</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm text-center card-hover">
                            <div class="text-3xl mb-2">🔧</div>
                            <div class="font-medium">Microservices</div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Languages & Frameworks</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">PHP</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">JavaScript</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">SQL</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">HTML</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">CSS</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Python</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Laravel</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">YII2</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">React.js</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Vue.js</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">jQuery</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Node.js</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Databases & Tools</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">MySQL</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">MongoDB</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">AWS</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Git</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Elasticsearch</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">REST APIs</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">AI Integration</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Milli-Search</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Typesense</span>
                            <span class="skill-tag bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">Agentic AI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Professional Experience</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            
            <div class="max-w-4xl mx-auto">
                <div class="relative border-l-4 border-primary pl-8 ml-4">
                    
                    <!-- Power Cozmo -->
                    <div class="mb-12 relative">
                        <div class="absolute -left-11 top-0 w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                        <div class="bg-gray-50 p-6 rounded-lg card-hover">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-800">Senior Software Engineer & Team Lead</h3>
                                <span class="text-sm text-gray-600 bg-blue-100 px-3 py-1 rounded-full">Sep 2024 - Present</span>
                            </div>
                            <p class="text-primary font-semibold mb-4">Power Cozmo</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Managing 12-member development team building CRM and marketplace platforms for the power generation and energy sector</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Achieved ₹6L monthly cost savings through workflow optimization and strategic resource management</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Implemented agile delivery through systematic code reviews and sprint planning</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Spearheading cross-platform integration projects connecting CRM with marketplace functionalities</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Driving technical architecture decisions for scalable energy sector solutions</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cool Boot Media -->
                    <div class="mb-12 relative">
                        <div class="absolute -left-11 top-0 w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                        <div class="bg-gray-50 p-6 rounded-lg card-hover">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-800">Senior Full Stack Engineer</h3>
                                <span class="text-sm text-gray-600 bg-blue-100 px-3 py-1 rounded-full">Dec 2021 - Aug 2024</span>
                            </div>
                            <p class="text-primary font-semibold mb-4">Cool Boot Media</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Led 4-member team developing Qureka Skool educational platform using React.js</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Designed backend infrastructure and microservices for AI Apps using Laravel</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Mentored junior developers and established code quality best practices</li>
                            </ul>
                        </div>
                    </div>

                    <!-- TechPasture Solutions -->
                    <div class="mb-12 relative">
                        <div class="absolute -left-11 top-0 w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                        <div class="bg-gray-50 p-6 rounded-lg card-hover">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-800">Senior Software Developer</h3>
                                <span class="text-sm text-gray-600 bg-blue-100 px-3 py-1 rounded-full">Jun 2021 - Nov 2021</span>
                            </div>
                            <p class="text-primary font-semibold mb-4">TechPasture Solutions</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Developed advanced APIs and web applications meeting industry standards</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Configured AWS Cloud Server and CI/CD deployment pipelines</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Built React.js marketplace platform for drone pilots (The Droning Company)</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Created admin panel with microservices using PHP8, Laravel, Livewire</li>
                            </ul>
                        </div>
                    </div>

                    <!-- DirectCreate -->
                    <div class="mb-12 relative">
                        <div class="absolute -left-11 top-0 w-6 h-6 bg-primary rounded-full border-4 border-white"></div>
                        <div class="bg-gray-50 p-6 rounded-lg card-hover">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold text-gray-800">Software Engineer</h3>
                                <span class="text-sm text-gray-600 bg-blue-100 px-3 py-1 rounded-full">Apr 2017 - May 2021</span>
                            </div>
                            <p class="text-primary font-semibold mb-4">DirectCreate</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Developed B2B/B2C collaboration platforms using PHP7, MySQL, YII2</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Built REST API services and mobile applications</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Implemented ML algorithms for image search functionality</li>
                                <li class="flex items-start"><span class="text-secondary mr-2">▹</span> Created e-commerce platform using OpenCart Framework</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Featured Projects</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            
            <div class="max-w-6xl mx-auto">
                
              

                <!-- Startups, SaaS & Portals -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">SaaS Platforms & Business Portals</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Power Cozmo</h4>
                            <p class="text-gray-600 mb-4">CRM and marketplace platform for power generation sector with advanced analytics and automation.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Langchain</span>
                            </div>
                           
                            <a href="https://dev.powercozmo.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                         <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Jordan Baba</h4>
                            <p class="text-gray-600 mb-4">CRM and marketplace platform for power generation sector with advanced analytics and automation.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                 <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Langchain</span>
                            </div>
                            
                            <a href="https://jordanbaba.com" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">ICRAFT AI</h4>
                            <p class="text-gray-600 mb-4">Revolutionizing digital marketing through innovative AI-powered solutions</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                 <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Python</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Langchain</span>
                            </div>
                            
                            <a href="https://icraftai.com" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                         <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">AI Cloud Optimization </h4>
                            <p class="text-gray-600 mb-4">Ai Powered Smarter AWS Cost Monitoring, Forecasting & Savings</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Python</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Langchain</span>
                            </div>
                            
                            <a href="https://cloud.icraftai.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                      

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Finedge</h4>
                            <p class="text-gray-600 mb-4">Financial services platform with portfolio management and investment tracking features.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Vue.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">FinTech</span>
                            </div>
                            <a href="https://www.finedge.in/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">IS2R</h4>
                            <p class="text-gray-600 mb-4">News portal with real-time updates and personalized content.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">PHP</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Wordpress</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">CMS</span>
                            </div>
                            <a href="https://is2r.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Mind Millers</h4>
                            <p class="text-gray-600 mb-4">Business consulting platform with project management and client collaboration features.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Python</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">MySQL</span>
                                 <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Microservices</span>
                               
                            </div>
                            <a href="https://mindmillers.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Logisch Tech</h4>
                            <p class="text-gray-600 mb-4">Technology solutions portal with service catalog and project tracking capabilities.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Node.Js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Microservices</span>
                            </div>
                            <a href="https://www.logischtech.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">99 Oranges</h4>
                            <p class="text-gray-600 mb-4">Digital marketing and analytics platform for business growth and performance tracking.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Wordpress</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">MySQL</span>
                                
                            </div>
                            <a href="https://99oranges.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Venture Dynamics Reporting</h4>
                            <p class="text-gray-600 mb-4">Business intelligence and reporting platform with real-time data visualization.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Python</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://reporting.venturedynamics.in/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">School Management System</h4>
                            <p class="text-gray-600 mb-4">Comprehensive platform for managing school operations, including student enrollment, attendance tracking, and grade management.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Node.Js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">MySQL</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">PHP</span>
                            </div>
                            <a href="https://anangpuria.redcapdigitalsolutions.com" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                          <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Maxsure Bidders</h4>
                            <p class="text-gray-600 mb-4">Insurance bidding platform with real-time quote comparison and automated processing.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">PHP</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded">Microservices</span>
                            </div>
                            <a href="https://maxsurebidders.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                    </div>
                </div>

                  <!-- E-commerce & Marketplace -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">E-commerce & Marketplace Solutions</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Fabindia</h4>
                            <p class="text-gray-600 mb-4">Large-scale e-commerce platform for ethnic Indian wear and home products with advanced inventory management.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">Node</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">MySQL</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">REST API</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">Microservices</span>
                            </div>
                            <a href="https://www.fabindia.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">DirectCreate</h4>
                            <p class="text-gray-600 mb-4">B2B/B2C collaboration marketplace connecting manufacturers with retailers and consumers.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">PHP7</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">YII2</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">REST API</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">Microservices</span>
                            </div>
                            <a href="https://www.directcreate.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Tailor Big Mike</h4>
                            <p class="text-gray-600 mb-4">Custom tailoring e-commerce platform with personalized measurement and design features.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">YII2</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">MySQL</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">Custom CMS</span>
                            </div>
                            <a href="https://tailorbigmike.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Halal Co-app</h4>
                            <p class="text-gray-600 mb-4">Halal business listing platform connecting verified halal businesses with Muslim consumers worldwide.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">PHP</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">Laravel</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://halalcoapp.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                       

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Morni</h4>
                            <p class="text-gray-600 mb-4">Modern e-commerce platform with seamless shopping experience and real-time inventory tracking.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">React.JS</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">Node.js</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://morni.vercel.app/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Chitrakala Art Gallery</h4>
                            <p class="text-gray-600 mb-4">Online art marketplace featuring curated collections with artist profiles and secure transactions.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">PHP</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">MySQL</span>
                                <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded">Gallery CMS</span>
                            </div>
                            <a href="https://www.chitrakalaartgallery.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- Educational Platforms -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Educational Technology</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">EdNeed</h4>
                            <p class="text-gray-600 mb-4">Comprehensive learning management system with interactive courses, assessments, and progress tracking.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded mr-2">Node.Js</span>
                                 <span class="text-xs bg-blue-100 text-primary px-2 py-1 rounded mr-2">MySQL</span>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">LMS</span>
                            </div>
                            <a href="https://edneed.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Sports & Entertainment -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Sports & Entertainment Platforms</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Monumental Sports Network</h4>
                            <p class="text-gray-600 mb-4">Sports streaming and content platform with live scores, news, and video on demand.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MongoDb</span>
                            </div>
                            <a href="https://www.monumentalsportsnetwork.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">LIV Golf</h4>
                            <p class="text-gray-600 mb-4">Professional golf tour platform with tournament schedules, player stats, and live updates.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://www.livgolf.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">NHL Official</h4>
                            <p class="text-gray-600 mb-4">National Hockey League platform with game schedules, scores, and comprehensive statistics.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                 <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://www.nhl.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Chorki</h4>
                            <p class="text-gray-600 mb-4">OTT streaming platform for Bengali content with subscription management and personalized recommendations.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MongoDB/MySQL</span>
                            </div>
                            <a href="https://www.chorki.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Gully Cricket</h4>
                            <p class="text-gray-600 mb-4">Fantasy cricket platform with tournament management and social gaming features.</p>
                            <div class="mb-4">
                                 <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://gullycricket.us/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md card-hover">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Trulia</h4>
                            <p class="text-gray-600 mb-4">Real estate platform with property listings, neighborhood insights, and market analytics.</p>
                            <div class="mb-4">
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Next.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">React.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded mr-2">Node.js</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MicroServices</span>
                                <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="https://www.trulia.com/" target="_blank" class="text-secondary hover:text-primary font-medium flex items-center">
                                Visit Site <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Future Plan -->
    <section id="future-plan" class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-slate-900 dark:to-indigo-950">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h2 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-300 bg-clip-text text-transparent mb-4">
                    Future Roadmap
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Next 12 Months Strategic Vision
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 mx-auto mt-6"></div>
            </div>

            <!-- Mission Statement -->
            <div class="max-w-4xl mx-auto mb-16">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Mission Focus</h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Over the next year, my focus is on advancing my expertise in <strong class="text-blue-600 dark:text-blue-400">AI-driven SaaS development</strong>, 
                                <strong class="text-indigo-600 dark:text-indigo-400">cloud architecture</strong>, and <strong class="text-purple-600 dark:text-purple-400">technical leadership</strong>. 
                                My goal is to design and scale intelligent, automation-focused systems that empower businesses to operate efficiently 
                                while contributing back to the tech community through open source and mentorship.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Goals Grid -->
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Goal 1 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                🚀
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                                    AI-powered SaaS Platforms
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Develop intelligent SaaS products using <strong>OpenAI</strong> and <strong>AWS</strong> 
                            to automate workflows like lead management, performance analytics, and customer support operations.
                        </p>
                    </div>

                    <!-- Goal 2 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                ☁️
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                    AWS Solutions Architect
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Earn certification and deepen cloud infrastructure expertise to design <strong>highly available, secure, and cost-optimized</strong> 
                            systems for large-scale enterprise applications.
                        </p>
                    </div>

                    <!-- Goal 3 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                🧩
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                                    Open-Source Contributions
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Develop reusable Laravel & FilamentPHP components, dashboards, and automation modules — 
                            empowering developers to build faster within the Laravel ecosystem.
                        </p>
                    </div>

                    <!-- Goal 4 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                👨‍🏫
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                                    Developer Mentorship
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Launch mentorship initiatives to guide aspiring developers through real-world 
                            <strong>Laravel</strong> and <strong>AWS</strong> practices, system design, and deployment strategies.
                        </p>
                    </div>

                    <!-- Goal 5 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-violet-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                🧠
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                    AI Agent Workflows
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Experiment with <strong>autonomous AI agents</strong> using OpenAI & AWS Bedrock for DevOps monitoring, 
                            data-driven insights, and system optimization tasks.
                        </p>
                    </div>

                    <!-- Goal 6 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                💡
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                                    Startup Collaboration
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Partner with early-stage founders to architect <strong>scalable SaaS and marketplace solutions</strong>, 
                            combining technical excellence with product vision.
                        </p>
                    </div>

                    <!-- Goal 7 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-500 to-slate-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                ⚙️
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-gray-600 dark:group-hover:text-gray-400 transition-colors">
                                    Performance Optimization
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Build internal tools and analytics dashboards to monitor system performance, 
                            automate reporting, and drive <strong>AWS cost efficiency</strong>.
                        </p>
                    </div>

                    <!-- Goal 8 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                🌍
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors">
                                    Community Contribution
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Publish detailed case studies, technical blogs, and YouTube tutorials covering 
                            <strong>Laravel scaling</strong>, <strong>microservices</strong>, and <strong>AI integrations</strong>.
                        </p>
                    </div>

                    <!-- Goal 9 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-2xl mr-4">
                                📚
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                    Thought Leadership
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                            Strengthen storytelling and leadership skills by sharing insights from real-world 
                            architecture challenges, SaaS launches, and cloud innovation journeys.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Vision Statement -->
            <div class="max-w-4xl mx-auto mt-16">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 text-white shadow-2xl">
                    <div class="flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4">Ultimate Vision</h3>
                    <p class="text-lg text-center leading-relaxed text-blue-100">
                        My goal is to blend <strong class="text-white">technical depth</strong> with <strong class="text-white">strategic vision</strong> — 
                        building intelligent, scalable, and cloud-native applications that help businesses grow faster, smarter, 
                        and more efficiently while fostering innovation in the developer community.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Education</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            
            <div class="max-w-3xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-lg card-hover">
                        <div class="text-4xl mb-4">🎓</div>
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Master of Computer Applications</h3>
                        <p class="text-primary font-semibold mb-2">Birla Institute of Technology, Mesra</p>
                        <p class="text-gray-600">2016</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-lg card-hover">
                        <div class="text-4xl mb-4">📚</div>
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Bachelor of Computer Applications</h3>
                        <p class="text-primary font-semibold mb-2">Birla Institute of Technology, Mesra</p>
                        <p class="text-gray-600">2013</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Get In Touch</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-12"></div>
            
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <p class="text-xl text-gray-700 mb-6">I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hello, feel free to reach out!</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                        <a href="mailto:mdsaif9013@gmail.com" class="text-secondary hover:text-primary">mdsaif9013@gmail.com</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Phone</h3>
                        <a href="tel:+919013628321" class="text-secondary hover:text-primary">+91 90136 28321</a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Location</h3>
                        <p class="text-gray-600">New Delhi, India</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md">
                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Name</label>
                                <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Your Name">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="your.email@example.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Project Inquiry">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-medium text-lg">Send Message</button>
                    </form>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Connect with me on social media</p>
                    <div class="flex justify-center space-x-6">
                        <a href="https://www.linkedin.com/in/saifullah-md/" target="_blank" class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="https://github.com/mdsaif786" target="_blank" class="w-12 h-12 bg-gray-800 text-white rounded-full flex items-center justify-center hover:bg-gray-900 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="mailto:mdsaif9013@gmail.com" class="w-12 h-12 bg-secondary text-white rounded-full flex items-center justify-center hover:bg-cyan-600 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p class="text-gray-400">&copy; 2025 Md. Saifullah. All rights reserved.</p>
                <p class="text-gray-500 mt-2">Built with passion and code ❤️</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Contact form handling
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! I will get back to you soon.');
            contactForm.reset();
        });

        // Add active state to navigation on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-primary', 'font-semibold');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-primary', 'font-semibold');
                }
            });
        });
    </script>
</body>
</html>