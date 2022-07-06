<template>
  <div class="page">
    <div class="p-5 bg-dark text-white">
      <div class="container">
        <h1 class="display-3">Concact me</h1>
        <p class="lead">Jumbo helper text</p>
      </div>
      <div class="content">
        <vue-form method="POST" action="/contact-form">
          <div class="mb-3">
                  <label for="full_name" class="form-label">Full Name</label>
                  <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Mario rossi" aria-describedby="fullNameHelper">
                  <small id="fullNameHelper" class="text-muted">Inserisci il tuo nome</small>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Mario rossi" aria-describedby="fullNameHelper">
                  <small id="fullNameHelper" class="text-muted">Inserisci la tua email</small>
                </div>

                <div class="mb-3">
                  <label for="subject" class="form-label">subject</label>
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Mario rossi" aria-describedby="fullNameHelper">
                  <small id="fullNameHelper" class="text-muted">Inserisci la tua email</small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </vue-form>
      </div>
    </div>
  </div>
</template>

<script>
import VueForm from '../components/VueForm.vue'
export default {
  name: "Contacts",
  components: { VueForm }
};
</script>
