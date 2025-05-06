<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background: #f4f4f9;
            color: #333;
        }
        a {
            text-decoration: none;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    
        /* Navigation Bar */
        nav {
            background: #1e1e2f;
            color: #fff;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }
        nav ul li a {
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s, transform 0.2s;
        }
        nav ul li a:hover {
            background: #575a89;
            transform: scale(1.1);
        }
    
        /* Header Section */
        header {
            text-align: center;
            padding: 2rem 1rem;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        header p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        header img {
            margin-top: 1rem;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
        }
    
        /* Section Styles */
        section {
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        section h2 {
            text-align: center;
            margin-bottom: 1rem;
            font-size: 2rem;
            color: #333;
        }
        section p {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
    
        /* Projects Section */
        .projects {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
        }
        .project {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            flex: 1 1 calc(33.333% - 2rem);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .project:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .project h3 {
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            color: #333;
        }
        .project p {
            font-size: 1rem;
            color: #666;
        }
    
        /* Contact Form */
        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #333;
        }
        form input, form textarea, form button {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        form textarea {
            resize: none;
            height: 150px;
        }
        form button {
            background: #6a11cb;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        form button:hover {
            background: #2575fc;
        }
    
        /* Footer */
        footer {
            background: #1e1e2f;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    
        /* Responsive Design */
        @media (max-width: 768px) {
            .projects {
                flex-direction: column;
            }
            .project {
                flex: 1 1 100%;
            }
            nav ul {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <header>
        <h1>Lekh Bahadur Bhujel</h1>
        <p>Welcome to my portfolio website!</p>
        <img src="https://nikeshbhujel.art.blog/wp-content/uploads/2023/04/faceapp_1670777933978-01.jpeg" alt="Portfolio Photo" style="margin-top: 1rem; width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
    </header>

    <section id="about">
        <h2>About Me</h2>
        <p>Hello! I'm a web developer passionate about creating beautiful and functional websites.</p>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Project 1</h3>
                <p>Description of project 1.</p>
            </div>
            <div class="project">
                <h3>Project 2</h3>
                <p>Description of project 2.</p>
            </div>
            <div class="project">
                <h3>Project 3</h3>
                <p>Description of project 3.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="/submit" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </section>

    <footer>
        <p>&copy; Lekh Web Designs</p>
    </footer>
</body>
</html>