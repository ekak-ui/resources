<script>
    {{-- resources/js/components/accordion.js --}}
    document.addEventListener('alpine:init', () => {
        Alpine.data('accordion', (config) => ({
            type: config.type || 'single',
            collapsible: config.collapsible !== false,
            openItems: [],

            init() {
                // Initialize with default value
                if (config.defaultValue) {
                    if (this.type === 'single') {
                        this.openItems = [config.defaultValue];
                    } else {
                        this.openItems = Array.isArray(config.defaultValue) ?
                            config.defaultValue :
                            [config.defaultValue];
                    }
                }
            },

            isOpen(value) {
                return this.openItems.includes(value);
            },

            toggleItem(value) {
                if (!value) return;

                const item = this.$el.querySelector(`[x-data*="value: '${value}'"]`);
                if (item && item.__x.$data.disabled) return;

                if (this.type === 'single') {
                    if (this.isOpen(value)) {
                        if (this.collapsible) {
                            this.openItems = [];
                        }
                    } else {
                        this.openItems = [value];
                    }
                } else {
                    // Multiple type
                    if (this.isOpen(value)) {
                        this.openItems = this.openItems.filter(v => v !== value);
                    } else {
                        this.openItems = [...this.openItems, value];
                    }
                }

                // Dispatch event for external listeners
                this.$dispatch('accordion-change', {
                    value: this.type === 'single' ? this.openItems[0] : this.openItems
                });
            }
        }));
    });
</script>
