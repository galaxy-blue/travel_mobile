<?php
  $city = $_POST['city'];

  $cityArr=array(
    '北京' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons2.png'
        ),
        array(
          id => '3',
          name => '北京必游',
          img => './api/images/icons3.png'
        ),
        array(
          id => '4',
          name => '北京世博会',
          img => './api/images/icons4.png'
        ),
        array(
          id => '5',
          name => '一日游',
          img => './api/images/icons5.png'
        ),
        array(
          id => '6',
          name => '荣国府',
          img => './api/images/icons06.png'
        ),
        array(
          id => '7',
          name => '北京野生动物园',
          img => './api/images/icons07.png'
        ),
        array(
          id => '8',
          name => '北京欢乐谷',
          img => './api/images/icons08.png'
        ),
        array(
          id => '9',
          name => '天安门',
          img => './api/images/icons09.png'
        ),
        array(
          id => '10',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '故宫',
          img => './api/images/hotlist11.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '天安门',
          img => './api/images/hotlist09.png',
          price => '20'
        ),
        array(
          id => '3',
          name => '后海',
          img => './api/images/hotlist02.png',
          price => '30',
        ),
        array(
          id => '4',
          name => '南锣鼓巷',
          img => './api/images/hotlist03.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '香山',
          img => './api/images/hotlist01.png',
          price => '80'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '天安门',
          img => './api/images/recommend06.png',
          price => '10',
          area => '东城区',
          number => '3267555',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '2',
          name => '故宫',
          img => './api/images/recommend01.png',
          price => '20',
          area => '东城区',
          number => '100000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '后海',
          img => './api/images/recommend07.png',
          price => '30',
          area => '西城区',
          number => '12891',
          describe => '',
          stars => '4'
        ),
        array(
          id => '4',
          name => '南锣鼓巷',
          img => './api/images/recommend03.png',
          price => '40',
          area => '西城区',
          number => '98043',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '5',
          name => '香山',
          img => './api/images/recommend02.png',
          price => '100',
          area => '郊外',
          number => '12300',
          describe => '',
          stars => '4'
        )
      )
    ),
    '上海' => array(
      'nav' => array(
        array(
          id => '1',
          name => '水上乐园',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '室内娱乐',
          img => './api/images/icons09.png'
        ),
        array(
          id => '3',
          name => '世纪公园',
          img => './api/images/icons3.png'
        ),
        array(
          id => '4',
          name => '上海野生',
          img => './api/images/icons07.png'
        ),
        array(
          id => '5',
          name => '上海迪斯尼',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '6',
          name => '上海海昌',
          img => './api/images/icons06.png'
        ),
        array(
          id => '7',
          name => '清凉避暑',
          img => './api/images/icons4.png'
        ),
        array(
          id => '8',
          name => '甜蜜七夕',
          img => './api/images/icons08.png'
        ),
        array(
          id => '9',
          name => '暑期大促',
          img => './api/images/icons09.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '上海欢乐谷',
          img => './api/images/hotlist02.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '东方明珠',
          img => './api/images/hotlist04.png',
          price => '20'
        ),
        array(
          id => '3',
          name => '上海野生动物园',
          img => './api/images/hotlist06.png',
          price => '30',
        ),
        array(
          id => '4',
          name => '上海科技馆 ',
          img => './api/images/hotlist08.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '上海迪士尼乐园',
          img => './api/images/hotlist10.png',
          price => '80'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '上海欢乐谷',
          img => './api/images/recommend02.png',
          price => '10',
          area => '东城区',
          number => '7877364',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '东方明珠',
          img => './api/images/recommend08.png',
          price => '20',
          area => '东城区',
          number => '111000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '上海野生动物园',
          img => './api/images/recommend10.png',
          price => '30',
          area => '西城区',
          number => '7843891',
          stars => '4'
        ),
        array(
          id => '4',
          name => '上海迪士尼乐园',
          img => './api/images/recommend03.png',
          price => '40',
          area => '西城区',
          number => '98043',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '5',
          name => '上海科技馆',
          img => './api/images/recommend08.png',
          price => '100',
          area => '郊外',
          number => '123444',
          stars => '4'
        )
      )
    ),
    '安庆' => array(
      'nav' => array(
        array(
          id => '1',
          name => '巨石山',
          img => './api/images/icons12.png'
        ),
        array(
          id => '2',
          name => '本地玩乐',
          img => './api/images/icons5.png'
        ),
        array(
          id => '3',
          name => '明堂山',
          img => './api/images/icons3.png'
        ),
        array(
          id => '4',
          name => '天柱山',
          img => './api/images/icons4.png'
        ),
        array(
          id => '5',
          name => '大别山',
          img => './api/images/icons09.png'
        ),
        array(
          id => '6',
          name => '文博园',
          img => './api/images/icons06.png'
        ),
        array(
          id => '7',
          name => '清凉避暑',
          img => './api/images/icons07.png'
        ),
        array(
          id => '8',
          name => '全部玩乐',
          img => './api/images/icons08.png'
        ),
        array(
          id => '9',
          name => '暑期大促',
          img => './api/images/icons10.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '天柱山',
          img => './api/images/hotlist11.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '明堂山',
          img => './api/images/hotlist05.png',
          price => '99'
        ),
        array(
          id => '3',
          name => '上海野生动物园',
          img => './api/images/hotlist03.png',
          price => '30',
        ),
        array(
          id => '4',
          name => '天峡 ',
          img => './api/images/hotlist10.png',
          price => '200'
        ),
        array(
          id => '5',
          name => '巨石山',
          img => './api/images/hotlist08.png',
          price => '70'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '明堂山',
          img => './api/images/recommend07.png',
          price => '990',
          area => '东城区',
          number => '2222224',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '巨石山',
          img => './api/images/recommend03.png',
          price => '320',
          area => '东城区',
          number => '1837000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '天柱山',
          img => './api/images/recommend09.png',
          price => '30',
          area => '西城区',
          number => '7872891',
          stars => '4'
        ),
        array(
          id => '4',
          name => '五千年文博馆',
          img => './api/images/recommend02.png',
          price => '40',
          area => '西城区',
          number => '98044443',
          describe => '',
          stars => '4'
        )
      )
    ),
    '安阳' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons5.png'
        ),
        array(
          id => '3',
          name => '安阳必游',
          img => './api/images/icons08.png'
        ),
        array(
          id => '4',
          name => '安阳世博会',
          img => './api/images/icons4.png'
        ),
        array(
          id => '5',
          name => '当地好玩',
          img => './api/images/icons3.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        ),
        array(
          id => '7',
          name => '动物园',
          img => './api/images/icons06.png'
        ),
        array(
          id => '8',
          name => '植物园',
          img => './api/images/icons4.png'
        ),
        array(
          id => '9',
          name => '一日游',
          img => './api/images/icons5.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '太行大峡谷',
          img => './api/images/hotlist05.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '岳飞庙',
          img => './api/images/hotlist03.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '万泉湖',
          img => './api/images/hotlist09.png',
          price => '130',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '太行大峡谷',
          img => './api/images/recommend06.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '岳飞庙',
          img => './api/images/recommend03.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '万泉湖',
          img => './api/images/recommend09.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        ),
        array(
          id => '4',
          name => '红旗渠',
          img => './api/images/recommend08.png',
          price => '40',
          area => '西城区',
          number => '8043',
          describe => '',
          stars => '4'
        )
      )
    ),
    '保定' => array(
      'nav' => array(
        array(
          id => '1',
          name => '保定必游',
          img => './api/images/icons10.png'
        ),
        array(
          id => '2',
          name => '白石山',
          img => './api/images/icons08.png'
        ),
        array(
          id => '3',
          name => '世纪公园',
          img => './api/images/icons3.png'
        ),
        array(
          id => '4',
          name => '白洋淀',
          img => './api/images/icons06.png'
        ),
        array(
          id => '5',
          name => '大物温泉',
          img => './api/images/icons4.png'
        ),
        array(
          id => '6',
          name => '野三坡',
          img => './api/images/icons01.png'
        ),
        array(
          id => '7',
          name => '清凉避暑',
          img => './api/images/icons4.png'
        ),
        array(
          id => '8',
          name => '动物园',
          img => './api/images/icons5.png'
        ),
        array(
          id => '9',
          name => '景点门票',
          img => './api/images/icons01.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '野三坡',
          img => './api/images/hotlist09.png',
          price => '160'
        ),
        array(
          id => '2',
          name => '白洋淀',
          img => './api/images/hotlist07.png',
          price => '70'
        ),
        array(
          id => '3',
          name => '白石山',
          img => './api/images/hotlist03.png',
          price => '90',
        ),
        array(
          id => '4',
          name => '易水湖 ',
          img => './api/images/hotlist06.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '清西陵',
          img => './api/images/hotlist04.png',
          price => '20'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '清西陵',
          img => './api/images/recommend02.png',
          price => '10',
          area => '东城区',
          number => '7877364',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '易水湖',
          img => './api/images/recommend07.png',
          price => '20',
          area => '东城区',
          number => '111000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '白洋淀',
          img => './api/images/recommend03.png',
          price => '30',
          area => '西城区',
          number => '7843891',
          stars => '4'
        ),
        array(
          id => '4',
          name => '野三坡',
          img => './api/images/recommend03.png',
          price => '40',
          area => '西城区',
          number => '98043',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        )
      )
    ),
    '北海' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons3.png'
        ),
        array(
          id => '3',
          name => '北海必游',
          img => './api/images/icons08.png'
        ),
        array(
          id => '4',
          name => '三月三',
          img => './api/images/icons4.png'
        ),
        array(
          id => '5',
          name => '当地好玩',
          img => './api/images/icons5.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        ),
        array(
          id => '7',
          name => '岛屿国',
          img => './api/images/icons09.png'
        ),
        array(
          id => '8',
          name => '万州岛',
          img => './api/images/icons12.png'
        ),
        array(
          id => '9',
          name => '一日游',
          img => './api/images/icons11sh.png'
        )
     ),
      'hot' => array(
        array(
          id => '1',
          name => '北海海底世界',
          img => './api/images/hotlist09.png',
          price => '70'
        ),
        array(
          id => '2',
          name => '北海银滩',
          img => './api/images/hotlist10.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '火山口地质公园',
          img => './api/images/hotlist11.png',
          price => '130',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '北海海底世界',
          img => './api/images/recommend02.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '北海银滩',
          img => './api/images/recommend07.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '火山口地质公园',
          img => './api/images/recommend10.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        )
      )
    ),
    '成都' => array(
      'nav' => array(
        array(
          id => '1',
          name => '成都必游',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '3',
          name => '川剧变脸',
          img => './api/images/icons12.png'
        ),
        array(
          id => '4',
          name => '熊猫基地',
          img => './api/images/icons06.png'
        ),
        array(
          id => '5',
          name => '暑假夜场',
          img => './api/images/icons4.png'
        ),
        array(
          id => '6',
          name => '碧峰峡',
          img => './api/images/icons09.png'
        ),
        array(
          id => '7',
          name => '清凉避暑',
          img => './api/images/icons10.png'
        ),
        array(
          id => '8',
          name => '动物园',
          img => './api/images/icons5.png'
        ),
        array(
          id => '9',
          name => '景点门票',
          img => './api/images/icons01.png'
        ),
        array(
          id => '10',
          name => '都江宴',
          img => './api/images/icons4.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '大熊猫基地',
          img => './api/images/hotlist11.png',
          price => '160'
        ),
        array(
          id => '2',
          name => '青城山',
          img => './api/images/hotlist07.png',
          price => '70'
        ),
        array(
          id => '3',
          name => '成都动物园',
          img => './api/images/hotlist02.png',
          price => '90',
        ),
        array(
          id => '4',
          name => '成都欢乐谷 ',
          img => './api/images/hotlist04.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '杜甫草堂',
          img => './api/images/hotlist06.png',
          price => '210'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '大熊猫基地',
          img => './api/images/recommend02.png',
          price => '10',
          area => '东城区',
          number => '7877364',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '杜甫草堂',
          img => './api/images/recommend07.png',
          price => '20',
          area => '东城区',
          number => '111000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '成都欢乐谷',
          img => './api/images/recommend09.png',
          price => '30',
          area => '西城区',
          number => '7843891',
          stars => '4'
        ),
        array(
          id => '4',
          name => '青城山',
          img => './api/images/recommend09.png',
          price => '40',
          area => '西城区',
          number => '98043',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        )
      )
    ),
    '承德' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons06.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons3.png'
        ),
        array(
          id => '3',
          name => '坝上草原',
          img => './api/images/icons07.png'
        ),
        array(
          id => '4',
          name => '避暑山庄',
          img => './api/images/icons2.png'
        ),
        array(
          id => '5',
          name => '当地好玩',
          img => './api/images/icons5.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        ),
        array(
          id => '7',
          name => '中国马镇',
          img => './api/images/icons01.png'
        ),
        array(
          id => '8',
          name => '海底世界',
          img => './api/images/icons12.png'
        ),
        array(
          id => '9',
          name => '两日游',
          img => './api/images/icons07.png'
        )
        ),
      'hot' => array(
        array(
          id => '1',
          name => '承德海底世界',
          img => './api/images/hotlist06.png',
          price => '70'
        ),
        array(
          id => '2',
          name => '避暑山庄',
          img => './api/images/hotlist01.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '坝上草原',
          img => './api/images/hotlist01.png',
          price => '130',
        ),
        array(
          id => '4',
          name => '森林公园',
          img => './api/images/hotlist03.png',
          price => '10',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '承德海底世界',
          img => './api/images/recommend10.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '森林公园',
          img => './api/images/recommend04.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '坝上草原',
          img => './api/images/recommend10.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        )
      )
    ),
    '大理' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons01.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons2.png'
        ),
        array(
          id => '3',
          name => '大理必游',
          img => './api/images/icons12.png'
        ),
        array(
          id => '4',
          name => '大理古城',
          img => './api/images/icons4.png'
        ),
        array(
          id => '5',
          name => '一日游',
          img => './api/images/icons5.png'
        ),
        array(
          id => '6',
          name => '精品小团',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '7',
          name => '武侠情怀',
          img => './api/images/icons07.png'
        ),
        array(
          id => '8',
          name => '大理必游',
          img => './api/images/icons08.png'
        ),
        array(
          id => '9',
          name => '继舟山',
          img => './api/images/icons09.png'
        ),
        array(
          id => '10',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '继舟山',
          img => './api/images/hotlist01.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '大理古城',
          img => './api/images/hotlist03.png',
          price => '20'
        ),
        array(
          id => '3',
          name => '自然风光',
          img => './api/images/hotlist02.png',
          price => '30',
        ),
        array(
          id => '4',
          name => '武侠情怀',
          img => './api/images/hotlist07.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '天龙八部影视城',
          img => './api/images/hotlist09.png',
          price => '80'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '天龙八部影视城',
          img => './api/images/recommend02.png',
          price => '10',
          area => '东城区',
          number => '3267555',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '2',
          name => '武侠情怀',
          img => './api/images/recommend01.png',
          price => '20',
          area => '东城区',
          number => '100000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '大理古城',
          img => './api/images/recommend03.png',
          price => '30',
          area => '西城区',
          number => '12891',
          describe => '',
          stars => '4'
        )
      )
    ),
    '大同' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons4.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons3.png'
        ),
        array(
          id => '3',
          name => '大同必游',
          img => './api/images/icons06.png'
        ),
        array(
          id => '4',
          name => '二月三',
          img => './api/images/icons07.png'
        ),
        array(
          id => '5',
          name => '当地好玩',
          img => './api/images/icons5.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons12.png'
        ),
        array(
          id => '7',
          name => '文化古迹',
          img => './api/images/icons09.png'
        ),
        array(
          id => '8',
          name => '两日游',
          img => './api/images/icons06.png'
        ),
        array(
          id => '9',
          name => '一日游',
          img => './api/images/icons5.png'
        )
        ),
      'hot' => array(
        array(
          id => '1',
          name => '文化古迹',
          img => './api/images/hotlist09.png',
          price => '70'
        ),
        array(
          id => '2',
          name => '悬空寺',
          img => './api/images/hotlist05.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '衡山',
          img => './api/images/hotlist11.png',
          price => '130',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '九龙壁',
          img => './api/images/recommend01.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '悬空寺',
          img => './api/images/recommend07.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '衡山',
          img => './api/images/recommend07.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        )
      )
    ),
    '佛山' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons12.png'
        ),
        array(
          id => '3',
          name => '佛山必游',
          img => './api/images/icons08.png'
        ),
        array(
          id => '4',
          name => '古龙峡',
          img => './api/images/icons07.png'
        ),
        array(
          id => '5',
          name => '枫林小镇',
          img => './api/images/icons3.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons2.png'
        ),
        array(
          id => '7',
          name => '文化古迹',
          img => './api/images/icons01.png'
        ),
        array(
          id => '8',
          name => '游乐场',
          img => './api/images/icons5.png'
        ),
        array(
          id => '9',
          name => '通天仙境',
          img => './api/images/icons4.png'
        )
        ),
      'hot' => array(
        array(
          id => '1',
          name => '文化古迹',
          img => './api/images/hotlist03.png',
          price => '70'
        ),
        array(
          id => '2',
          name => '西郊山',
          img => './api/images/hotlist04.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '荷仙境 ',
          img => './api/images/hotlist08.png',
          price => '130',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '文化古迹',
          img => './api/images/recommend09.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '荷仙境',
          img => './api/images/recommend07.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '西郊山',
          img => './api/images/recommend04.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        )
      )
    ),
    '福建' => array(
      'nav' => array(
        array(
          id => '1',
          name => '景点门票',
          img => './api/images/icons2.png'
        ),
        array(
          id => '2',
          name => '自然风光',
          img => './api/images/icons01.png'
        ),
        array(
          id => '3',
          name => '武夷山',
          img => './api/images/icons08.png'
        ),
        array(
          id => '4',
          name => '水上乐园',
          img => './api/images/icons06.png'
        ),
        array(
          id => '5',
          name => '瓷天下',
          img => './api/images/icons4.png'
        ),
        array(
          id => '6',
          name => '全部玩乐',
          img => './api/images/icons10.png'
        ),
        array(
          id => '7',
          name => '文化古迹',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '8',
          name => '游乐场',
          img => './api/images/icons5.png'
        ),
        array(
          id => '9',
          name => '亲子游',
          img => './api/images/icons08.png'
        )
        ),
      'hot' => array(
        array(
          id => '1',
          name => '文化古迹',
          img => './api/images/hotlist07.png',
          price => '70'
        ),
        array(
          id => '2',
          name => '西郊山',
          img => './api/images/hotlist03.png',
          price => '90'
        ),
        array(
          id => '3',
          name => '荷仙境 ',
          img => './api/images/hotlist01.png',
          price => '130',
        ),
        array(
          id => '4',
          name => '一日游 ',
          img => './api/images/hotlist05.png',
          price => '130',
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '文化古迹',
          img => './api/images/recommend04.png',
          price => '10',
          area => '东城区',
          number => '7555',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '荷仙境',
          img => './api/images/recommend10.png',
          price => '20',
          area => '东城区',
          number => '5000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '西郊山',
          img => './api/images/recommend03.png',
          price => '30',
          area => '西城区',
          number => '91',
          describe => '',
          stars => '4'
        )
      )
    ),
    'default' => array(
      'nav' => array(
        array(
          id => '1',
          name => '水上乐园',
          img => './api/images/icons4.png'
        ),
        array(
          id => '2',
          name => '一日必游',
          img => './api/images/icons06.png'
        ),
        array(
          id => '3',
          name => '古龙峡',
          img => './api/images/icons08.png'
        ),
        array(
          id => '4',
          name => '野生动物园',
          img => './api/images/icons10.png'
        ),
        array(
          id => '5',
          name => '植物园',
          img => './api/images/icons11sh.png'
        ),
        array(
          id => '6',
          name => '一周游',
          img => './api/images/icons3.png'
        ),
        array(
          id => '7',
          name => '清凉避暑',
          img => './api/images/icons4.png'
        ),
        array(
          id => '8',
          name => '甜蜜七夕',
          img => './api/images/icons12.png'
        ),
        array(
          id => '9',
          name => '暑期大促',
          img => './api/images/icons09.png'
        )
      ),
      'hot' => array(
        array(
          id => '1',
          name => '欢乐谷',
          img => './api/images/hotlist01.png',
          price => '60'
        ),
        array(
          id => '2',
          name => '动物园',
          img => './api/images/hotlist03.png',
          price => '20'
        ),
        array(
          id => '3',
          name => '植物园',
          img => './api/images/hotlist05.png',
          price => '30',
        ),
        array(
          id => '4',
          name => '科技馆 ',
          img => './api/images/hotlist06.png',
          price => '40'
        ),
        array(
          id => '5',
          name => '一日游',
          img => './api/images/hotlist08.png',
          price => '80'
        )
      ),
      'love' => array(
        array(
          id => '1',
          name => '科技馆',
          img => './api/images/recommend01.png',
          price => '10',
          area => '东城区',
          number => '7877364',
          describe => '',
          stars => '4'
        ),
        array(
          id => '2',
          name => '动物园',
          img => './api/images/recommend02.png',
          price => '20',
          area => '东城区',
          number => '111000',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '3',
          name => '植物园',
          img => './api/images/recommend04.png',
          price => '30',
          area => '西城区',
          number => '7843891',
          stars => '4'
        ),
        array(
          id => '4',
          name => '一日游',
          img => './api/images/recommend07.png',
          price => '40',
          area => '西城区',
          number => '98043',
          describe => '世界五大宫之首，穿越与您近在咫尺',
          stars => '4'
        ),
        array(
          id => '5',
          name => '上海科技馆',
          img => './api/images/recommend09.png',
          price => '100',
          area => '郊外',
          number => '123444',
          stars => '4'
        )
      )
    ),
  );
  $bFlag = false;
  foreach($cityArr as  $key => $value){
    if($key == $city){
      $data = json_encode($value);
      echo $data;
      $bFlag = true;
      exit;
    }
  }
  if(!$bFlag){
    $defaultArr = $cityArr['default'];
    $data = json_encode($defaultArr);
    echo $data;
  }
?>
