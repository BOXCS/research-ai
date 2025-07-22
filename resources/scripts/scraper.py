import sys
import json
from scholarly import scholarly
import requests
from bs4 import BeautifulSoup

def get_citation_count(title):
    try:
        search_query = scholarly.search_pubs(title)
        result = next(search_query, None)
        if result:
            return result.get('num_citations', 0)
    except:
        pass
    return 0

def get_sjr_score(journal):
    try:
        url = f"https://www.scimagojr.com/journalsearch.php?q={journal.replace(' ', '+')}"
        r = requests.get(url)
        soup = BeautifulSoup(r.text, "html.parser")
        journal_link = soup.select_one("a[href^='journalsearch.php?tip=sid']")
        if journal_link:
            detail_url = "https://www.scimagojr.com/" + journal_link['href']
            detail_page = requests.get(detail_url)
            detail_soup = BeautifulSoup(detail_page.text, "html.parser")
            sjr = detail_soup.find("div", class_="cell", string="SJR")
            if sjr:
                value = sjr.find_next("div", class_="cell").text.strip()
                return float(value.replace(',', '.'))
    except:
        pass
    return None

if __name__ == "__main__":
    # Laravel akan mengirim JSON string berisi title dan journal
    data = json.loads(sys.argv[1])
    title = data['title']
    journal = data['journal']

    result = {
        'citation_count': get_citation_count(title),
        'impact_factor': get_sjr_score(journal)
    }

    print(json.dumps(result))
