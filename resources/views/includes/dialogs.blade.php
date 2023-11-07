<div x-data="dialogs" x-on:show-custom-dialog.window="openDialog">
    <x-dialog z-index="z-50" blur="md" align="center" />
    <x-dialog id="contact-update" title="Editar contato">
        <x-input label="Nome"  x-model="contact.name" />
        <x-input label="Celular"  x-model="contact.cellphone" x-mask="(99) 9 9999-9999"/>
    </x-dialog>
</div>
@push('script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('dialogs', () => ({
                contact: {
                    id:'',
                    name:'',
                    cellphone:''
                },
                openDialog(object) {
                    switch (object.detail.dialogId) {
                        case 'contact-update':
                            object.detail.value = JSON.parse(object.detail.value);
                            this.contact.id = object.detail.value.id,
                            this.contact.name = object.detail.value.name,
                            this.contact.cellphone = object.detail.value.cellphone,
                            window.$wireui.confirmDialog({
                                id: 'contact-update',
                                description: 'Nome antigo para referência: '+this.contact.name,
                                icon: 'question',
                                accept: {
                                    label: 'Salvar',
                                    method: 'save',
                                    params: 'Saved'
                                },
                                reject: {
                                    label: 'Cancelar',
                                    method: 'cancel'
                                }
                            })
                            break;
                        default:
                    }
                }
            }))
        })
    </script>
@endpush
