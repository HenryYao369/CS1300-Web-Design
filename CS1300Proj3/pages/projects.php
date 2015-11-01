<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hengzhi's Projects</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <?php include 'templates/banner.php' ?>

    <div id="container">

        <div id="content">
            <h1 class="subtitle">Projects</h1>

            <ul>
                <li>
                    Operating Systems
                    <ul>
                        <li>Used semaphores and monitors to solve multithreading problems, such as reader/writer, one-line bridge.</li>
                        <li>Implemented 3 page replacement algorithms, and used sorting algorithm files to explore Belady’s Anomaly.</li>
                        <li>Used sockets to implement a message exchange system which could handle concurrent requests.</li>
                    </ul>
                    <br>
                </li>
            </ul>

            <div class="imageHolder">
                <img src="../img/OS-book.jpg" alt="OS-book">
                <p class="italic caption">Operating System Concepts (The Dinosaur Book)</p>
                <p class="caption">Image from <a href="http://www.amazon.com/Operating-System-Concepts-Abraham-Silberschatz/dp/1118063333/ref=dp_ob_title_bk">amazon.com</a></p>
            </div>

            <ul>
                <li>
                    Computer Networks
                    <ul>
                        <li>Implemented UDP, TCP, and built Reliable Data Transfer (RDT) based on a UDP system in Linux.</li>
                    </ul>
                    <br>
                </li>
                <li>
                    Data Mining
                    <ul>
                        <li>Studied various models in Classification, Clustering, Association Analysis, and Anomaly/Fraud Detection.</li>
                        <li>Used logistic regression with regularization and Stochastic Gradient Descent to classify large-scale datasets.</li>
                        <li>Built a SVM from scratch with linear & Gaussian kernels. Applied Cross Validation to adjust parameters.</li>
                    </ul>
                    <br>
                </li>

                <li>
                    Regression Analysis & Multivariate Statistical Analysis
                    <ul>
                        <li>Used R to Visualize & Analyze high-dimensional datasets: regression, LDA, PCA, CCA etc.</li>
                    </ul>
                    <br>
                </li>
            </ul>

            <div class="imageHolder">
                <img src="../img/DM-book.jpg" alt="DM-book">
                <p class="italic caption">Introduction to Data Mining</p>
                <p class="caption">Image from <a href="http://www-users.cs.umn.edu/~kumar/dmbook/index.php">cs.umn.edu</a></p>
            </div>

            <ul>
                <li>
                    Shutterbug (iOS app)
                    <ul>
                        <li>Presented a list of popular Flickr photo spots and allow users to see photos taken in those spots.</li>
                        <li>Downloaded photo data using Flickr API, and used multithreading to avoid blocking main thread(UI etc.)</li>
                        <li>Parsed JSON to get most popular photo spots; put the data into a list (UITableView) sectioned by country.</li>
                    </ul>
                    <br>
                </li>
            </ul>

            <br><br>

        </div>  <!--content-->


        <?php include 'templates/footer.php' ?>

    </div> <!--container-->

</body>
</html>