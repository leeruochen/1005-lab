<?php
require_once __DIR__ . '/inc/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.inc.php'; ?>
    <body>
        <?php include 'inc/nav.inc.php'; ?>
        <?php include 'inc/header.inc.php'; ?>
        <main class ="container">
            <section>
                <h2 id="dogs">All About Dogs!</h2>
                <div class="row">
                <article class="col-sm">
                <h3>Poodles</h3>
                <figure>
                    <img class="petImg" src="images/poodle_small.jpg" alt="Poodle"
                        title="View larger image...">
                    <figcaption>Standard Poodle</figcaption>
                </figure>
                <p>
                    Poodles are a group of formal dog breeds, the Standard Poodle, Miniature
                    Poodle and Toy Poodle...
                </p>
                </article>
                <article class="col-sm">
                <h3>Chihuahua</h3>
                <figure>
                    <img class="petImg" src="images/chihuahua_small.jpg" alt="Chihuahua"
                        title="View larger image...">
                    <figcaption>Chihuahua</figcaption>
                </figure>
                <p>
                    The Chihuahua is the smallest breed of dog, and is named after
                    the Mexican state of Chihuahua...
                </p>
                </article>
                </div>
            </section>

            <section>
                <h2 id="cats">All About Cats!</h2>
                <div class="row">
                <article class="col-sm">
                <h3>Tabby</h3>
                <figure>
                    <img class="petImg" src="images/tabby_small.jpg" alt="Tabby"
                        title="View larger image...">
                    <figcaption>Tabby Cat</figcaption>
                </figure>
                <p>
                    A tabby is any domestic cat with an 'M' on its forehead,
                    stripes by its eyes and across its cheeks.
                </p>
                </article>
                <article class="col-sm">
                <h3>Calico</h3>
                <figure>
                    <img class="petImg" src="images/calico_small.jpg" alt="Calico"
                        title="View larger image...">
                    <figcaption>Calico Cat</figcaption>
                </figure>
                <p>
                    A calico cat is a domestic cat with a coat that is typically
                    25% to 75% white and has large orange and black patches.
                </p>
                </article>
                </div>
            </section>
        </main>
        <?php include 'inc/footer.inc.php'; ?>
    </body>
</html>