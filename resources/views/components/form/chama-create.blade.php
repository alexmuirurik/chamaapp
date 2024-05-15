<div class="multisteps-form">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
            <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                    <span>1. Chama Info</span>
                </button>
                <button class="multisteps-form__progress-btn" type="button" title="Media">2.
                    Media</button>
                <button class="multisteps-form__progress-btn" type="button" title="Socials">3.
                    Socials</button>
                <button class="multisteps-form__progress-btn" type="button" title="Pricing">4.
                    Pricing</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8" style="height: 406px;">
                <div class="card multisteps-form__panel p-3 border-radius-xl js-active"
                    data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Product Information</h5>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <label>Name</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="eg. Off-White" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Weight</label>
                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. 42"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="mt-4">Description</label>
                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                    (optional)
                                </p>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <label>Name</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="eg. Off-White" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Weight</label>
                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. 42"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-outline-light bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>

                <div class="card multisteps-form__panel p-3 border-radius-xl" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Media</h5>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Product images</label>
                                <div action="/file-upload" class="form-control dropzone dz-clickable"
                                    id="productImg">
                                    <div class="dz-default dz-message"><button class="dz-button" type="button">Drop
                                            files here to upload</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>

                <div class="card multisteps-form__panel p-3 border-radius-xl" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Socials</h5>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Shoppify Handle</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="@argon" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-12 mt-3">
                                <label>Facebook Account</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="https://..." onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-12 mt-3">
                                <label>Instagram Account</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="https://..." onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="button-row d-flex mt-4 col-12">
                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                    title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card multisteps-form__panel p-3 border-radius-xl h-100" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Pricing</h5>
                    <div class="multisteps-form__content mt-3">
                        <div class="row">
                            <div class="col-3">
                                <label>Price</label>
                                <input class="multisteps-form__input form-control" type="text" placeholder="99.00"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-4">
                                <label>Currency</label>
                                <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select class="form-control choices__input"
                                            name="choices-sizes" id="choices-currency" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="Choice 1">USD</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="Choice 1" data-custom-properties="null"
                                                aria-selected="true">USD</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--choices-currency-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="1" data-value="Choice 6"
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">BTC</div>
                                            <div id="choices--choices-currency-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="Choice 4"
                                                data-select-text="Press to select" data-choice-selectable="">CNY</div>
                                            <div id="choices--choices-currency-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3" data-value="Choice 2"
                                                data-select-text="Press to select" data-choice-selectable="">EUR</div>
                                            <div id="choices--choices-currency-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4" data-value="Choice 3"
                                                data-select-text="Press to select" data-choice-selectable="">GBP</div>
                                            <div id="choices--choices-currency-item-choice-5"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="5" data-value="Choice 5"
                                                data-select-text="Press to select" data-choice-selectable="">INR</div>
                                            <div id="choices--choices-currency-item-choice-6"
                                                class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                role="option" data-choice="" data-id="6" data-value="Choice 1"
                                                data-select-text="Press to select" data-choice-selectable="">USD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <label>SKU</label>
                                <input class="multisteps-form__input form-control" type="text"
                                    placeholder="71283476591" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="mt-4 form-label">Tags</label>
                                <div class="choices" data-type="select-multiple" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select class="form-control choices__input"
                                            name="choices-tags" id="choices-tags" multiple="" hidden=""
                                            tabindex="-1" data-choice="active">
                                            <option value="Choice 1">In Stock</option>
                                            <option value="Two">Out of Stock</option>
                                        </select>
                                        <div class="choices__list choices__list--multiple">
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="1" data-value="Choice 1" data-custom-properties="null"
                                                aria-selected="true" data-deletable="">In Stock<button type="button"
                                                    class="choices__button" aria-label="Remove item: 'Choice 1'"
                                                    data-button="">Remove item</button></div>
                                            <div class="choices__item choices__item--selectable" data-item=""
                                                data-id="2" data-value="Two" data-custom-properties="null"
                                                aria-selected="true" data-deletable="">Out of Stock<button
                                                    type="button" class="choices__button"
                                                    aria-label="Remove item: 'Two'" data-button="">Remove
                                                    item</button></div>
                                        </div><input type="text" class="choices__input choices__input--cloned"
                                            autocomplete="off" autocapitalize="off" spellcheck="false"
                                            role="textbox" aria-autocomplete="list" aria-label="false">
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" aria-multiselectable="true" role="listbox">
                                            <div id="choices--choices-tags-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="1" data-value="Choice 4"
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Black Friday</div>
                                            <div id="choices--choices-tags-item-choice-5"
                                                class="choices__item choices__item--choice choices__item--disabled"
                                                role="option" data-choice="" data-id="5" data-value="One"
                                                data-select-text="Press to select" data-choice-disabled=""
                                                aria-disabled="true">Expired</div>
                                            <div id="choices--choices-tags-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3" data-value="Choice 2"
                                                data-select-text="Press to select" data-choice-selectable="">Out of
                                                Stock</div>
                                            <div id="choices--choices-tags-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4" data-value="Choice 3"
                                                data-select-text="Press to select" data-choice-selectable="">Sale
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                title="Send">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
