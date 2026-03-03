export function _ek_accordion({ transition = false, exclusive = false }) {
  return {
    transition: transition,
    exclusive: exclusive,
    opened: [],
    open(id) {
      if (this.exclusive) {
        return (this.opened = this.opened.includes(id) ? [] : [id]);
      }
      if (this.opened.includes(id)) {
        return (this.opened = this.opened.filter((i) => i !== id));
      }
      this.opened.push(id);
    },
  };
}
