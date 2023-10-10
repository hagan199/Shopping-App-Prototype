 export const formatAmountWithCommas = (amount, decimals = 2) => {
    return (
      amount &&
      Number(amount)
        .toFixed(decimals)
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    );
  };