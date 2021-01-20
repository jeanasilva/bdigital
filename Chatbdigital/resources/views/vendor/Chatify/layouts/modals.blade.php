{{-- ---------------------- Image modal box ---------------------- --}}
<div id="imageModalBox" class="imageModal">
    <span class="imageModal-close">&times;</span>
    <img class="imageModal-content" id="imageModalBoxSrc">
  </div>

  {{-- ---------------------- Delete Modal ---------------------- --}}
  <div class="app-modal" data-name="delete">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="delete" data-modal='0'>
              <div class="app-modal-header">Você têm certeza que deseja deletar?</div>
              <div class="app-modal-body">Você não pode desfazer tal ação</div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Cancelar</a>
                  <a href="javascript:void(0)" class="app-btn a-btn-danger delete">Deletar</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Alert Modal ---------------------- --}}
  <div class="app-modal" data-name="alert">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="alert" data-modal='0'>
              <div class="app-modal-header"></div>
              <div class="app-modal-body"></div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Settings Modal ---------------------- --}}
  <div class="app-modal" data-name="settings">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="settings" data-modal='0'>
              <form id="updateAvatar" action="{{ route('avatar.update') }}" enctype="multipart/form-data" method="POST">
                  @csrf
                  <div class="app-modal-header">Atualizar as informações de seu Perfil</div>
                  <div class="app-modal-body">
                      {{-- Udate profile avatar --}}
                      <div class="avatar av-l upload-avatar-preview"
                      style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}');"
                      ></div>
                      <p class="upload-avatar-details"></p>
                      <label class="app-btn a-btn-primary update">
                          Upload profile photo
                          <input class="upload-avatar" accept="image/*" name="avatar" type="file" style="display: none" />
                      </label>
                      {{-- Dark/Light Mode  --}}
                      <p class="divider"></p>
                      <p class="app-modal-header">Modo Escuro <span class="
                        {{ Auth::user()->dark_mode > 0 ? 'fas' : 'far' }} fa-moon dark-mode-switch"
                         data-mode="{{ Auth::user()->dark_mode > 0 ? 1 : 0 }}"></span></p>
                      {{-- change messenger color  --}}
                      <p class="divider"></p>
                      <p class="app-modal-header">Trocar {{ config('chatify.name') }} Cor</p>
                      <div class="update-messengerColor">
                            <a href="javascript:void(0)" class="messengerColor-1"></a>
                            <a href="javascript:void(0)" class="messengerColor-2"></a>
                            <a href="javascript:void(0)" class="messengerColor-3"></a>
                            <a href="javascript:void(0)" class="messengerColor-4"></a>
                            <a href="javascript:void(0)" class="messengerColor-5"></a>
                            <br/>
                            <a href="javascript:void(0)" class="messengerColor-6"></a>
                            <a href="javascript:void(0)" class="messengerColor-7"></a>
                            <a href="javascript:void(0)" class="messengerColor-8"></a>
                            <a href="javascript:void(0)" class="messengerColor-9"></a>
                            <a href="javascript:void(0)" class="messengerColor-10"></a>
                      </div>
                  </div>
                  <div class="app-modal-footer">
                      <a href="javascript:void(0)" class="app-btn cancel">Cancelar</a>
                      <input type="submit" class="app-btn a-btn-success update" value="Update" />
                  </div>
              </form>
          </div>
      </div>
  </div>
