<?php include 'header.php'; ?>

<main class="container">
    <h1 data-en="Contact Us" data-tr="Bize Ulaşın">Contact Us</h1>
    <section id="contact-info">
        <p data-en="Get in touch with us for expert legal advice." data-tr="Uzman hukuki tavsiye için bizimle iletişime geçin.">Get in touch with us for expert legal advice.</p>
        <p data-en="Phone: (123) 456-7890" data-tr="Telefon: (123) 456-7890">Phone: (123) 456-7890</p>
        <p data-en="Email: info@hekimoglu.com" data-tr="E-posta: info@hekimoglu.com">Email: info@hekimoglu.com</p>
        <p data-en="Address: 123 Legal Street, Istanbul, Turkey" data-tr="Adres: Hukuk Caddesi No: 123, İstanbul, Türkiye">Address: 123 Legal Street, Istanbul, Turkey</p>
    </section>
    <section id="contact-form">
        <h2 data-en="Send us a message" data-tr="Bize mesaj gönderin">Send us a message</h2>
        <form>
            <label for="name" data-en="Name" data-tr="İsim">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email" data-en="Email" data-tr="E-posta">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message" data-en="Message" data-tr="Mesaj">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" data-en="Send" data-tr="Gönder">Send</button>
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>