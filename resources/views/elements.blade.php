@extends('layouts.app')

@section('title', 'Elements')

@section('content')
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Elements</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            <!-- Text -->
            <section>
                <h3>Text</h3>
                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

                <hr />

                <header>
                    <h3>Heading with a Subtitle</h3>
                    <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                </header>
                <p>...</p>
                <header>
                    <h4>Heading with a Subtitle</h4>
                    <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                </header>
                <p>...</p>

                <hr />

                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5>
                <h6>Heading Level 6</h6>

                <hr />

                <h4>Blockquote</h4>
                <blockquote>...</blockquote>

                <h4>Preformatted</h4>
                <pre><code>...</code></pre>
            </section>

            <!-- Lists -->
            <section>
                <h3>Lists</h3>
                <div class="row">
                    <div class="col-6 col-12-xsmall">
                        <h4>Unordered</h4>
                        <ul>...</ul>

                        <h4>Alternate</h4>
                        <ul class="alt">...</ul>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <h4>Ordered</h4>
                        <ol>...</ol>

                        <h4>Icons</h4>
                        <ul class="icons">...</ul>
                        <ul class="icons">...</ul>
                    </div>
                </div>

                <h4>Actions</h4>
                <ul class="actions">...</ul>
                <ul class="actions small">...</ul>
                <div class="row">...</div>
            </section>

            <!-- Table -->
            <section>
                <h3>Table</h3>
                <h4>Default</h4>
                <div class="table-wrapper">
                    <table>...</table>
                </div>
                <h4>Alternate</h4>
                <div class="table-wrapper">
                    <table class="alt">...</table>
                </div>
            </section>

            <!-- Buttons -->
            <section>
                <h3>Buttons</h3>
                <ul class="actions">...</ul>
                <ul class="actions">...</ul>
                <div class="row">...</div>
                <ul class="actions">...</ul>
                <ul class="actions">...</ul>
            </section>

            <!-- Form -->
            <section>
                <h3>Form</h3>
                <form method="post" action="#">
                    <div class="row gtr-uniform gtr-50">...</div>
                </form>
            </section>

            <!-- Image -->
            <section>
                <h3>Image</h3>
                <h4>Fit</h4>
                <div class="box alt">
                    <div class="row gtr-50 gtr-uniform">...</div>
                </div>

                <h4>Left & Right</h4>
                <p><span class="image left"><img src="{{ asset('images/pic08.jpg') }}" alt="" /></span>...</p>
                <p><span class="image right"><img src="{{ asset('images/pic08.jpg') }}" alt="" /></span>...</p>
            </section>

        </div>
    </div>
@endsection
