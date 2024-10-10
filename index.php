<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCBI Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #2d6ca2;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .hero {
            background: url('ncbi_background.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
        .hero h2 {
            font-size: 40px;
        }
        nav {
            background-color: #1d4f78;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        section {
            margin-bottom: 30px;
        }
        footer {
            background-color: #2d6ca2;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
        footer p {
            margin: 0;
        }
        .button-group {
            text-align: center;
            margin-top: 30px;
        }
        .button-group a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #2d6ca2;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button-group a:hover {
            background-color: #1d4f78;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to NCBI Database</h1>
    <p>Your gateway to vast biological sequence information</p>
</header>

<div class="hero">
    <h2>Explore Biological Data Like Never Before</h2>
</div>

<nav>
    <a href="index.html">Home</a>
    <a href="homepage.php">Home</a>
    <a href="search.php">Search</a>
    <a href="help.php">Help</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <section>
        <h2>About NCBI Database</h2>
        <p>The National Center for Biotechnology Information (NCBI) offers free access to biomedical and genomic information. Search through our vast repository of genetic sequences and analyze data with various bioinformatics tools.</p>
        <p>Our database provides information about nucleotide sequences, protein sequences, molecular types, and much more. Use the search tools to find the data you need for your research and analysis.</p>
    </section>

    <section>
        <h2>Popular Resources</h2>
        <ul>
            <li><a href="https://www.ncbi.nlm.nih.gov/">Official NCBI Website</a></li>
            <li><a href="https://www.ncbi.nlm.nih.gov/genbank/">GenBank</a> - Publicly available nucleotide sequences.</li>
            <li><a href="https://blast.ncbi.nlm.nih.gov/Blast.cgi">BLAST</a> - Tool to compare biological sequences.</li>
            <li><a href="https://www.ncbi.nlm.nih.gov/refseq/">RefSeq</a> - Non-redundant set of reference sequences for organisms.</li>
        </ul>
    </section>

    <div class="button-group">
        <a href="search.php">Start Searching</a>
        <a href="help.html">Get Help</a>
    </div>
</div>

<footer>
    <p>&copy; 2024 NCBI Database | <a href="contact.html" style="color:white;">Contact Us</a></p>
</footer>

</body>
</html>
