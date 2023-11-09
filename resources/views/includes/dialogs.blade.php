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
                            this.contact.id = object.detail.value._id,
                            this.contact.name = object.detail.value.name,
                            this.contact.cellphone = object.detail.value.cellphone,
                            window.$wireui.confirmDialog({
                                id: 'contact-update',
                                description: 'Nome antigo para referência: '+this.contact.name,
                                icon: 'question',
                                accept: {
                                    label: 'Salvar',
                                    method: 'updateContatc',
                                    params: this.contact
                                },
                                reject: {
                                    label: 'Cancelar',
                                }
                            }, object.detail.componentID)
                            break;
                        case 'contact-delete':
                            object.detail.value = JSON.parse(object.detail.value);
                            this.contact.id = object.detail.value._id,
                            this.contact.name = object.detail.value.name,
                            this.contact.cellphone = object.detail.value.cellphone,
                            window.$wireui.confirmDialog({
                                title: 'Deletar contato',
                                description: 'Desejar prosseguir com a deleção do contato: '+this.contact.name+'?',
                                icon: 'error',
                                accept: {
                                    label: 'Deletar',
                                    method: 'deleteContact',
                                    params: this.contact
                                },
                                reject: {
                                    label: 'Cancelar',
                                }
                            }, object.detail.componentID)
                            break;
                        case 'contact-unlink':
                            object.detail.value = JSON.parse(object.detail.value);
                            this.contact.id = object.detail.value._id,
                            this.contact.name = object.detail.value.name,
                            window.$wireui.confirmDialog({
                                title: 'Desvincular contato',
                                description: 'Desejar prosseguir com a desvinculação com contato: '+this.contact.name+'?',
                                icon: 'warning',
                                accept: {
                                    label: 'Desvincular',
                                    method: 'unlinkContactSystem',
                                    params: this.contact
                                },
                                reject: {
                                    label: 'Cancelar',
                                }
                            }, object.detail.componentID)
                            break;
                        default:
                    }
                }
            }))
        })
    </script>
@endpush
