<template>
    <div class="layout-px-spacing">

        <div class="row app-notes layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
<!--                <div class="app-hamburger-container">-->
<!--                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>-->
<!--                </div>-->
                <div class="app-container">
                    <div class="app-note-container">
                        <div class="app-note-overlay"></div>
                        <div id="ct" class="note-container note-grid">
<!--                            <div v-for="i in comunicados" class="note-item all-notes " :class="i.color">-->
<!--                                <div class="note-inner-content">-->
<!--                                    <div class="note-content">-->
<!--                                        <p class="note-title" data-notetitle="Meeting with Kelly">{{i.nombre}}</p>-->
<!--                                        <p class="meta-time">{{i.created_at|moment("d/MM/YYYY")}}</p>-->
<!--                                        <div class="note-description-content">-->
<!--                                            <p class="note-description" v-html="i.contenido">-->
<!--                                            </p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--&lt;!&ndash;                                    <div class="note-action">&ndash;&gt;-->
<!--&lt;!&ndash;                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>&ndash;&gt;-->
<!--&lt;!&ndash;                                    </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <div class="note-footer">&ndash;&gt;-->
<!--&lt;!&ndash;                                        <div class="tags-selector btn-group">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div class="tags">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="g-dot-personal"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="g-dot-work"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="g-dot-social"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="g-dot-important"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>&ndash;&gt;-->
<!--&lt;!&ndash;                                                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </a>&ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="dropdown-menu dropdown-menu-right d-icon-menu">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                    </div>&ndash;&gt;-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="note-item all-notes note-fav">-->
<!--                                <div class="note-inner-content">-->
<!--                                    <div class="note-content">-->
<!--                                        <p class="note-title" data-notetitle="Receive Package">Receive Package</p>-->
<!--                                        <p class="meta-time">11/01/2019</p>-->
<!--                                        <div class="note-description-content">-->
<!--                                            <p class="note-description" data-notedescription="Curabitur facilisis vel elit sed dapibus sodales purus.">Facilisis curabitur facilisis vel elit sed dapibus sodales purus.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="note-action">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>-->
<!--                                    </div>-->
<!--                                    <div class="note-footer">-->
<!--                                        <div class="tags-selector btn-group">-->
<!--                                            <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">-->
<!--                                                <div class="tags">-->
<!--                                                    <div class="g-dot-personal"></div>-->
<!--                                                    <div class="g-dot-work"></div>-->
<!--                                                    <div class="g-dot-social"></div>-->
<!--                                                    <div class="g-dot-important"></div>-->
<!--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu dropdown-menu-right d-icon-menu">-->
<!--                                                <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>-->
<!--                                                <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>-->
<!--                                                <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>-->
<!--                                                <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="note-item all-notes note-work">-->
<!--                                <div class="note-inner-content">-->
<!--                                    <div class="note-content">-->
<!--                                        <p class="note-title" data-notetitle="Imporant Infomation">Download Docs</p>-->
<!--                                        <p class="meta-time">11/04/2019</p>-->
<!--                                        <div class="note-description-content">-->
<!--                                            <p class="note-description" data-notedescription="Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.">Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="note-action">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>-->
<!--                                    </div>-->
<!--                                    <div class="note-footer">-->
<!--                                        <div class="tags-selector btn-group">-->
<!--                                            <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">-->
<!--                                                <div class="tags">-->
<!--                                                    <div class="g-dot-personal"></div>-->
<!--                                                    <div class="g-dot-work"></div>-->
<!--                                                    <div class="g-dot-social"></div>-->
<!--                                                    <div class="g-dot-important"></div>-->
<!--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu dropdown-menu-right d-icon-menu">-->
<!--                                                <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>-->
<!--                                                <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>-->
<!--                                                <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>-->
<!--                                                <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="note-item all-notes note-important">-->
<!--                                <div class="note-inner-content">-->
<!--                                    <div class="note-content">-->
<!--                                        <p class="note-title" data-notetitle="Create new users Profile">Create new users Profile</p>-->
<!--                                        <p class="meta-time">11/10/2019</p>-->
<!--                                        <div class="note-description-content">-->
<!--                                            <p class="note-description" data-notedescription="Duis aute irure dolor in voluptate nulla pariatur.">Duis aute irure  in nulla pariatur. Etiam a odio eget enim aliquet</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="note-action">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>-->
<!--                                    </div>-->
<!--                                    <div class="note-footer">-->
<!--                                        <div class="tags-selector btn-group">-->
<!--                                            <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">-->
<!--                                                <div class="tags">-->
<!--                                                    <div class="g-dot-personal"></div>-->
<!--                                                    <div class="g-dot-work"></div>-->
<!--                                                    <div class="g-dot-social"></div>-->
<!--                                                    <div class="g-dot-important"></div>-->
<!--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu dropdown-menu-right d-icon-menu">-->
<!--                                                <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>-->
<!--                                                <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>-->
<!--                                                <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>-->
<!--                                                <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                <div class="notes-box">
                                    <div class="notes-content">
                                        <form action="javascript:void(0);" id="notesMailModalTitle">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-flex note-title">
                                                        <input type="text" id="n-title" class="form-control" maxlength="25" placeholder="Title">
                                                    </div>
                                                    <span class="validation-text"></span>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="d-flex note-description">
                                                        <textarea id="n-description" class="form-control" maxlength="60" placeholder="Description" rows="3"></textarea>
                                                    </div>
                                                    <span class="validation-text"></span>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btn-n-save" class="float-left btn">Save</button>
                                <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard</button>
                                <button id="btn-n-add" class="btn">Add</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
      return {
          comunicados:[],
      }
    },
    mounted() {
        // console.log('Component mounted.')
        axios.get('/mostrar').then(res=>{
            this.comunicados=res.data;
            // console.log(res.data);
        })
    }
}
</script>

