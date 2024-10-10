<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCBI Help</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2d6ca2;
            text-align: center;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #2d6ca2;
            padding-bottom: 5px;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #2d6ca2;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>NCBI Help and Support</h1>

    <h2>What is NCBI?</h2>
    <p>The National Center for Biotechnology Information (NCBI) is a government-funded resource that provides access to biomedical and genomic information. It offers tools to search databases for sequences, structures, and other data.</p>

    <h2>How to Use the Search Function</h2>
    <p>To search for a specific nucleotide or protein sequence, you can enter an accession ID into the search bar. An accession ID is a unique identifier assigned to a sequence submitted to NCBI databases, such as GenBank, RefSeq, or others.</p>
    
    <h3>Steps to Search:</h3>
    <ul>
        <li>Go to the search page.</li>
        <li>Enter the accession ID or keywords related to the sequence you are looking for (e.g., "PP101260").</li>
        <li>Click the "Search" button.</li>
        <li>If a match is found, you will see details about the sequence, such as its source, length, molecule type, and the FASTA format sequence.</li>
    </ul>

    <h2>Understanding Accession IDs</h2>
    <p>An accession ID is a unique identifier for a sequence entry in a biological database. It typically starts with a combination of letters followed by numbers (e.g., <strong>PP123456</strong>).</p>
    <p>Accession IDs can be found in the sequence header of FASTA files and other related biological databases. They are key to locating specific genetic sequences in public databases like GenBank.</p>

    <h2>Frequently Asked Questions (FAQs)</h2>

    <h3>What happens if no results are found?</h3>
    <p>If no results are found for your search, it may be due to an incorrect or invalid accession ID. Double-check the ID you entered or try searching with a different one.</p>

    <h3>How can I download sequences from NCBI?</h3>
    <p>Once you have located a sequence using its accession ID, you can view the sequence in FASTA format. Copy the sequence and paste it into a text editor to save it for later use.</p>

    <h3>What if I encounter an error?</h3>
    <p>If you experience any issues, such as search failures or missing data, please ensure that your query is correct. For persistent problems, you can contact NCBI support.</p>

    <h2>Additional Resources</h2>
    <ul>
        <li><a href="https://www.ncbi.nlm.nih.gov/">Official NCBI Website</a></li>
        <li><a href="https://www.ncbi.nlm.nih.gov/genbank/">GenBank Help</a></li>
        <li><a href="https://www.ncbi.nlm.nih.gov/books/NBK3831/">NCBI Handbook</a></li>
        <li><a href="https://blast.ncbi.nlm.nih.gov/Blast.cgi">NCBI BLAST (Basic Local Alignment Search Tool)</a></li>
    </ul>
    
    <h2>Contact Us</h2>
    <p>If you need further assistance, feel free to <a href="contact.php">contact us</a> and we will respond to your queries as soon as possible.</p>

</div>

</body>
</html>
