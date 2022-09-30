<!-- Kariyer -->
@extends ('layouts.app')

@section('title', 'MENTAL / KARYİYER')

@section('content')

<div class="section carreer-section">
    <div class="mental-container" >
        <p class="carreer-text">kariyer</p>
        <div class="row">
            <div class="col-lg-9 col-md-12 offset-lg-3">
                <div class="row" style="background-color:#f4f4f4">
                    <div class="col-lg-6 col-md-6 col-xs-12 padding_0">
                        <div class="full">
                            <div class="contact-form col-sm-12 col-md-12">
                                <div class="full contact_form"style="background-color:#f4f4f4">
                                    <form id="kariyer-form" class="contact_form_inner" action="#">
                                        <fieldset>
                                            <div class="field">
                                                <input id="career-field" type="text" name="name" placeholder="ad soyad" />
                                            </div>
                                            <div class="field">
                                                <input id="career-field" type="email" name="email" placeholder="e-posta" />
                                            </div>
                                            <div class="field">
                                                <input id="career-field" type="text" name="phone_no"
                                                    placeholder="cep telefonu" />
                                            </div>
                                            <div class="field">
                                                <textarea id="career-field" placeholder="ön yazı"
                                                    class="kariyer-textarea"></textarea>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 padding_0 align-center">
                        <div class="full">
                            <div class="contact-form col-sm-12 col-md-12">
                                <div class="full contact_form" style="background-color:#f4f4f4">
                                    <div class="contact_form_inner" action="#">
                                        <fieldset class="h-100 flex-direction-column">
                                            <div class="field">
                                                <input id="career-field" type="text" name="position" placeholder="pozisyon"
                                                    form="kariyer-form" />
                                            </div>
                                            <div class="field">
                                                <input id="career-field" type="file" name="cv" id="files" form="kariyer-form"
                                                    placeholder="yükle (cv ve portfolyo)"
                                                    class="display-none" />
                                                <label id="career-field" for="files">yükle (cv ve portfolyo)</label>
                                            </div>
                                            <div class="field">
                                                <input id="career-field" type="text" name="link" form="kariyer-form"
                                                    placeholder="link (behance, pinterest vb.)" />
                                            </div>
                                            <div class="field center flex-1">
                                                <button class="button-submit-form kariyer-send-button"
                                                    form="kariyer-form">gönder</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                    </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12 offset-lg-3 margin-top_30">
                <div class="col-12">
                    <p class="kariyer-plan-text">Bizim için, kariyer planı her şeyden önemlidir. Biliyoruz
                        hep birlikte öğreneceğiz. </p>
                    
                    <p class="kariyer-plan-text">Not: Lütfen sizi daha iyi tanıyabileceğimiz için portfolyo
                        gönderin. </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto 
    {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
</style>