@extends("layouts.master")

@section("contenu")


</form method="post" action="organisateur.ajouter" class="comment-form">
<div style="border:1px solid #d9ccd5; padding:6px; background:#e3c5e5" class="row">
    <div class="col-lg-12">

        <h3 class="text-blue color-uvci">Remarque visuel</h3>
        <div id="comments">

            <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">

                    <div class="section-header">

                        <p>
                            Faites vos remarques sur le visuel
                        </p>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" style="background-color:orange;">Envoyer un
                            message</button></div>
                    </form>
                </div>

        </div>
        </section><!-- #contact -->

        </main>

        @endsection