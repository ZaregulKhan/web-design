<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCBI Database - Home</title>
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
            padding: 15px 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
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
        .search-box {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-box input[type="text"] {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-box button {
            padding: 10px 20px;
            background-color: #2d6ca2;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-box button:hover {
            background-color: #1d4f78;
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
    </style>
</head>
<body>

<header>
    <h1>NCBI Database</h1>
    <p>Search the world's largest repository of biological sequences</p>
</header>

<nav>
    <a href="homepage.php">Home</a>
    <a href="search.php">Search</a>
    <a href="help.php">Help</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <div class="search-box">
        <h2>Search for Nucleotide or Protein Sequences</h2>
        <form action="search.php" method="get">
            <input type="text" name="query" placeholder="Enter Accession ID or Keyword">
            <button type="submit">Search</button>
        </form>
    </div>

    <section>
        <h2>About the NCBI Database</h2>
        <p>The National Center for Biotechnology Information (NCBI) provides a wide range of resources and tools to assist researchers and scientists in accessing genomic data. The NCBI repository includes comprehensive datasets of nucleotide and protein sequences, tools for sequence analysis, and other bioinformatics resources.</p>
        <p>Use our search tool to explore specific sequences by their accession IDs, molecular types, or keywords.</p>
    </section>

    <section>
        <h2>Popular Tools</h2>
        <ul>
            <li><a href="https://blast.ncbi.nlm.nih.gov/Blast.cgi">BLAST (Basic Local Alignment Search Tool)</a> - Find regions of local similarity between sequences.</li>
            <li><a href="https://www.ncbi.nlm.nih.gov/genbank/">GenBank</a> - Publicly available annotated collection of all publicly available DNA sequences.</li>
            <li><a href="https://www.ncbi.nlm.nih.gov/sra">SRA (Sequence Read Archive)</a> - Repository for high-throughput sequencing data.</li>
            <li><a href="https://www.ncbi.nlm.nih.gov/refseq/">RefSeq</a> - Comprehensive, integrated, non-redundant set of sequences for organisms.</li>
        </ul>
    </section>
</div>

<footer>
    <p>&copy; 2024 NCBI Database | <a href="contact.html" style="color:white;">Contact Us</a></p>
</footer>

</body>
</html>
