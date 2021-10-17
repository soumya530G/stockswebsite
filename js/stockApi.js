const stockApi = {
    getSummary: async () => {
        return await fetchRequest(stockApiEndPoints)
    }
}

const stock_api_base = "https://www.shikhersrivastava.com/stocktradingapi/auth/signup"

const covidApiEndPoints = {
    summary: () => {
        return getApiPath('summary')
    }
}

getApiPath = (end_point) => {
    return stock_api_base + end_point
}