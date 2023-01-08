// Division Section select
function divisionsList() {
	// get value from division lists
	var diviList = document.getElementById('divisions').value;

	// set barishal division districts
	if(diviList == 'বরিশাল'){		
		var disctList = '<option disabled selected>Select District</option><option value="বরগুনা">বরগুনা</option><option value="বরিশাল">বরিশাল</option><option value="ভোলা">ভোলা</option><option value="ঝালকাঠি">ঝালকাঠি</option><option value="পটুয়াখালী">পটুয়াখালী</option><option value="পিরোজপুর">পিরোজপুর</option>';
	}
	// set Chattogram division districts
	else if(diviList == 'চট্টগ্রাম') {
		var disctList = '<option disabled selected>Select District</option><option value="কুমিল্লা">কুমিল্লা</option><option value="চট্টগ্রাম">চট্টগ্রাম</option><option value="ফেনী">ফেনী</option><option value="ব্রাহ্মণবাড়িয়া">ব্রাহ্মণবাড়িয়া</option><option value="রাঙ্গামাটি">রাঙ্গামাটি</option><option value="নোয়াখালী">নোয়াখালী</option><option value="চাঁদপুর">চাঁদপুর</option><option value="লক্ষ্মীপুর">লক্ষ্মীপুর</option><option value="কক্সবাজার">কক্সবাজার</option><option value="বান্দরবান">বান্দরবান</option><option value="খাগড়াছড়ি">খাগড়াছড়ি</option>';	
	}
	// set Dhaka division districts
	else if(diviList == 'ঢাকা') {
		var disctList = '<option disabled selected>Select District</option><option value="ফরিদপুর">ফরিদপুর</option><option value="ঢাকা">ঢাকা</option><option value="নরসিংদী">নরসিংদী</option><option value="গাজীপুর">গাজীপুর</option><option value="শরীয়তপুর">শরীয়তপুর</option><option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option><option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option><option value="মানিকগঞ্জ">মানিকগঞ্জ</option><option value="মুন্সিগঞ্জ">মুন্সিগঞ্জ</option><option value="গোপালগঞ্জ">গোপালগঞ্জ</option><option value="টাঙ্গাইল">টাঙ্গাইল</option><option value="রাজবাড়ী">রাজবাড়ী</option><option value="মাদারীপুর">মাদারীপুর</option>';
	}
	else if(diviList == 'খুলনা') {
		var disctList = '<option disabled selected>Select District</option><option value="যশোর">যশোর</option><option value="খুলনা">খুলনা</option><option value="সাতক্ষীরা">সাতক্ষীরা</option><option value="মেহেরপুর">মেহেরপুর</option><option value="নড়াইল">নড়াইল</option><option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা</option><option value="কুষ্টিয়া">কুষ্টিয়া</option><option value="মাগুরা">মাগুরা</option><option value="বাগেরহাট">বাগেরহাট</option><option value="ঝিনাইদহ">ঝিনাইদহ</option>';
	}
	else if(diviList == 'রাজশাহী') {
		var disctList = '<option disabled selected>Select District</option><option value="বগুড়া">বগুড়া</option><option value="রাজশাহী">রাজশাহী</option><option value="পাবনা">পাবনা</option><option value="সিরাজগঞ্জ">সিরাজগঞ্জ</option><option value="নাটোর">নাটোর</option><option value="জয়পুরহাট">জয়পুরহাট</option><option value="নওগাঁ">নওগাঁ</option><option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>';
	}
	else if(diviList == 'রংপুর') {
		var disctList = '<option disabled selected>Select District</option><option value="দিনাজপুর">দিনাজপুর</option><option value="রংপুর">রংপুর</option><option value="পঞ্চগড়">পঞ্চগড়</option><option value="লালমনিরহাট">লালমনিরহাট</option><option value="নীলফামারী">নীলফামারী</option><option value="গাইবান্ধা">গাইবান্ধা</option><option value="কুড়িগ্রাম">কুড়িগ্রাম</option><option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>';
	}
	else if(diviList == 'সিলেট') {
		var disctList = '<option disabled selected>Select District</option><option value="মৌলভীবাজার">মৌলভীবাজার</option><option value="সিলেট">সিলেট</option><option value="হবিগঞ্জ">হবিগঞ্জ</option><option value="সুনামগঞ্জ">সুনামগঞ্জ</option>';
	}
	else if(diviList == 'ময়মনসিংহ') {
		var disctList = '<option disabled selected>Select District</option><option value="শেরপুর">শেরপুর</option><option value="ময়মনসিংহ">ময়মনসিংহ</option><option value="জামালপুর">জামালপুর</option><option value="নেত্রকোণা">নেত্রকোণা</option>';
	}

	//  set/send districts name to District lists from division
	document.getElementById("distr").innerHTML= disctList;
}

// Thana Section select
function thanaList(){
	var DisList = document.getElementById('distr').value;
	if(DisList == 'বরগুনা') {
		var thanaList = '<option value="">Select One</option><option value="আমতলী">আমতলী</option><option value="বরগুনা সদর">বরগুনা সদর</option><option value="বেতাগী">বেতাগী</option><option value="বামনা">বামনা</option><option value="তালতলি">তালতলি</option><option value="পাথরঘাটা">পাথরঘাটা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'বরিশাল') {
		var thanaList = '<option value="">Select One</option><option value="বাকেরগঞ্জ">বাকেরগঞ্জ</option><option value="বরিশাল সদর">বরিশাল সদর</option><option value="বাবুগঞ্জ">বাবুগঞ্জ</option><option value="উজিরপুর">উজিরপুর</option><option value="বানারীপাড়া">বানারীপাড়া</option><option value="গৌরনদী">গৌরনদী</option><option value="আগৈলঝাড়া">আগৈলঝাড়া</option><option value="মেহেন্দিগঞ্জ">মেহেন্দিগঞ্জ</option><option value="মুলাদী">মুলাদী</option><option value="হিজলা">হিজলা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ভোলা') {
		var thanaList = '<option value="">Select One</option><option value="মনপুরা">মনপুরা</option><option value="ভোলা সদর">ভোলা সদর</option><option value="বোরহান উদ্দিন">বোরহান উদ্দিন</option><option value="দৌলতখান">দৌলতখান</option><option value="তজুমদ্দিন">তজুমদ্দিন</option><option value="লালমোহন">লালমোহন</option><option value="চরফ্যাশন">চরফ্যাশন</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ঝালকাঠি') {
		var thanaList = '<option value="">Select One</option><option value="নলছিটি">নলছিটি</option><option value="ঝালকাঠি সদর">ঝালকাঠি সদর</option><option value="কাঠালিয়া">কাঠালিয়া</option><option value="রাজাপুর">রাজাপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'পটুয়াখালী') {
		var thanaList = '<option value="">Select One</option><option value="বাউফল">বাউফল</option><option value="পটুয়াখালী সদর">পটুয়াখালী সদর</option><option value="দুমকি">দুমকি</option><option value="দশমিনা">দশমিনা</option><option value="কলাপাড়া">কলাপাড়া</option><option value="মির্জাগঞ্জ">মির্জাগঞ্জ</option><option value="গলাচিপা">গলাচিপা</option><option value="রাঙ্গাবালী">রাঙ্গাবালী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'পিরোজপুর') {
		var thanaList = '<option value="">Select One</option><option value="নাজিরপুর">নাজিরপুর</option><option value="পিরোজপুর সদর">পিরোজপুর সদর</option><option value="কাউখালী">কাউখালী</option><option value="ভান্ডারিয়া">ভান্ডারিয়া</option><option value="মঠবাড়ীয়া">মঠবাড়ীয়া</option><option value="নেছারাবাদ">নেছারাবাদ</option><option value="ইন্দুরকানী">ইন্দুরকানী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'কুমিল্লা') {
		var thanaList = '<option value="">Select One</option><option value="দেবিদ্বার">দেবিদ্বার</option><option value="কুমিল্লা সদর">কুমিল্লা সদর</option><option value="বরুড়া">বরুড়া</option><option value="ব্রাহ্মণপাড়া">ব্রাহ্মণপাড়া</option><option value="চান্দিনা">চান্দিনা</option><option value="চৌদ্দগ্রাম">চৌদ্দগ্রাম</option><option value="দাউদকান্দি">দাউদকান্দি</option><option value="হোমনা">হোমনা</option><option value="লাকসাম">লাকসাম</option><option value="মুরাদনগর">মুরাদনগর</option><option value="নাঙ্গলকোট">নাঙ্গলকোট</option><option value="মেঘনা">মেঘনা</option><option value="মনোহরগঞ্জ">মনোহরগঞ্জ</option><option value="সদর দক্ষিণ">সদর দক্ষিণ</option><option value="তিতাস">তিতাস</option><option value="বুড়িচং">বুড়িচং</option><option value="লালমাই">লালমাই</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'চট্টগ্রাম') {
		var thanaList = '<option value="">Select One</option><option value="রাঙ্গুনিয়া">রাঙ্গুনিয়া</option><option value="সীতাকুন্ড">সীতাকুন্ড</option><option value="মীরসরাই">মীরসরাই</option><option value="পটিয়া">পটিয়া</option><option value="সন্দ্বীপ">সন্দ্বীপ</option><option value="বাঁশখালী">বাঁশখালী</option><option value="বোয়ালখালী">বোয়ালখালী</option><option value="আনোয়ারা">আনোয়ারা</option><option value="চন্দনাইশ">চন্দনাইশ</option><option value="সাতকানিয়া">সাতকানিয়া</option><option value="লোহাগাড়া">লোহাগাড়া</option><option value="হাটহাজারী">হাটহাজারী</option><option value="ফটিকছড়ি">ফটিকছড়ি</option><option value="রাউজান">রাউজান</option><option value="কর্ণফুলী">কর্ণফুলী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ফেনী') {
		var thanaList = '<option value="">Select One</option><option value="ছাগলনাইয়া">ছাগলনাইয়া</option><option value="ফেনী সদর">ফেনী সদর</option><option value="সোনাগাজী">সোনাগাজী</option><option value="ফুলগাজী">ফুলগাজী</option><option value="পরশুরাম">পরশুরাম</option><option value="দাগনভূঞা">দাগনভূঞা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ব্রাহ্মণবাড়িয়া') {
		var thanaList = '<option value="">Select One</option><option value="কসবা">কসবা</option><option value="ব্রাহ্মণবাড়িয়া সদর">ব্রাহ্মণবাড়িয়া সদর</option><option value="নাসিরনগর">নাসিরনগর</option><option value="সরাইল">সরাইল</option><option value="আশুগঞ্জ">আশুগঞ্জ</option><option value="আখাউড়া">আখাউড়া</option><option value="নবীনগর">নবীনগর</option><option value="বাঞ্ছারামপুর">বাঞ্ছারামপুর</option><option value="বিজয়নগর">বিজয়নগর</option><option value="অন্যান্য">অন্যান্য</option>'
	}
	if(DisList == 'রাঙ্গামাটি') {
		var thanaList = '<option value="">Select One</option><option value="কাপ্তাই">কাপ্তাই</option><option value="রাঙ্গামাটি সদর">রাঙ্গামাটি সদর</option><option value="কাউখালী">কাউখালী</option><option value="বাঘাইছড়ি">বাঘাইছড়ি</option><option value="বরকল">বরকল</option><option value="লংগদু">লংগদু</option><option value="রাজস্থলী">রাজস্থলী</option><option value="বিলাইছড়ি">বিলাইছড়ি</option><option value="জুরাছড়ি">জুরাছড়ি</option><option value="নানিয়ারচর">নানিয়ারচর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'নোয়াখালী') {
		var thanaList = '<option value="">Select One</option><option value="কোম্পানীগঞ্জ">কোম্পানীগঞ্জ</option><option value="নোয়াখালী সদর">নোয়াখালী সদর</option><option value="বেগমগঞ্জ">বেগমগঞ্জ</option><option value="হাতিয়া">হাতিয়া</option><option value="সুবর্ণচর">সুবর্ণচর</option><option value="কবিরহাট">কবিরহাট</option><option value="সেনবাগ">সেনবাগ</option><option value="চাটখিল">চাটখিল</option><option value="সোনাইমুড়ী">সোনাইমুড়ী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'চাঁদপুর') {
		var thanaList = '<option value="">Select One</option><option value="মতলব">মতলব</option><option value="চাঁদপুর সদর">চাঁদপুর সদর</option><option value="হাইমচর">হাইমচর</option><option value="কচুয়া">কচুয়া</option><option value="শাহরাস্তি">শাহরাস্তি</option><option value="হাজীগঞ্জ">হাজীগঞ্জ</option><option value="ফরিদগঞ্জ">ফরিদগঞ্জ</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'লক্ষ্মীপুর') {
		var thanaList = '<option value="">Select One</option><option value="রায়পুর">রায়পুর</option><option value="লক্ষ্মীপুর সদর">লক্ষ্মীপুর সদর</option><option value="কমলনগর">কমলনগর</option><option value="রামগতি">রামগতি</option><option value="রামগঞ্জ">রামগঞ্জ</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'কক্সবাজার') {
		var thanaList = '<option value="">Select One</option><option value="চকরিয়া">চকরিয়া</option><option value="কক্সবাজার সদর">কক্সবাজার সদর</option><option value="কুতুবদিয়া">কুতুবদিয়া</option><option value="উখিয়া">উখিয়া</option><option value="মহেশখালী">মহেশখালী</option><option value="পেকুয়া">পেকুয়া</option><option value="রামু">রামু</option><option value="টেকনাফ">টেকনাফ</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'খাগড়াছড়ি') {
		var thanaList = '<option value="">Select One</option><option value="মাটিরাঙ্গা">মাটিরাঙ্গা</option><option value="খাগড়াছড়ি সদর">খাগড়াছড়ি সদর</option><option value="দিঘীনালা">দিঘীনালা</option><option value="পানছড়ি">পানছড়ি</option><option value="লক্ষীছড়ি">লক্ষীছড়ি</option><option value="মহালছড়ি">মহালছড়ি</option><option value="মানিকছড়ি">মানিকছড়ি</option><option value="রামগড়">রামগড়</option><option value="গুইমারা">গুইমারা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'বান্দরবান') {
		var thanaList = '<option value="">Select One</option><option value="থানচি">থানচি</option><option value="বান্দরবান সদর">বান্দরবান সদর</option><option value="আলীকদম">আলীকদম</option><option value="নাইক্ষ্যংছড়ি">নাইক্ষ্যংছড়ি</option><option value="রোয়াংছড়ি">রোয়াংছড়ি</option><option value="লামা">লামা</option><option value="রুমা">রুমা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ঢাকা') {
		var thanaList = '<option value="">Select One</option><option value="সাভার">সাভার</option><option value="ধামরাই">ধামরাই</option><option value="কেরাণীগঞ্জ">কেরাণীগঞ্জ</option><option value="দোহার">দোহার</option><option value="নবাবগঞ্জ">নবাবগঞ্জ</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ফরিদপুর') {
		var thanaList = '<option value="">Select One</option><option value="আলফাডাঙ্গা">আলফাডাঙ্গা</option><option value="ফরিদপুর সদর">ফরিদপুর সদর</option><option value="বোয়ালমারী">বোয়ালমারী</option><option value="সদরপুর">সদরপুর</option><option value="নগরকান্দা">নগরকান্দা</option><option value="ভাঙ্গা">ভাঙ্গা</option><option value="চরভদ্রাসন">চরভদ্রাসন</option><option value="মধুখালী">মধুখালী</option><option value="সালথা">সালথা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'নরসিংদী') {
		var thanaList = '<option value="">Select One</option><option value="বেলাবো Sadar">বেলাবো Sadar</option><option value="নরসিংদী সদর">নরসিংদী সদর</option><option value="মনোহরদী">মনোহরদী</option><option value="পলাশ">পলাশ</option><option value="রায়পুরা">রায়পুরা</option><option value="শিবপুর">শিবপুর</option<option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'গাজীপুর') {
		var thanaList = '<option value="">Select One</option><option value="কালীগঞ্জ">কালীগঞ্জ</option><option value="গাজীপুর সদর">গাজীপুর সদর</option><option value="কালিয়াকৈর">কালিয়াকৈর</option><option value="কাপাসিয়া">কাপাসিয়া</option><option value="শ্রীপুর">শ্রীপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'শরীয়তপুর') {
		var thanaList = '<option value="">Select One</option><option value="নড়িয়া">নড়িয়া</option><option value="শরিয়তপুর সদর">শরিয়তপুর সদর</option><option value="জাজিরা">জাজিরা</option><option value="গোসাইরহাট">গোসাইরহাট</option><option value="ভেদরগঞ্জ">ভেদরগঞ্জ</option><option value="ডামুড্যা">ডামুড্যা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'নারায়ণগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="বন্দর">বন্দর</option><option value="নারায়নগঞ্জ সদর">নারায়নগঞ্জ সদর</option><option value="আড়াইহাজার">আড়াইহাজার</option><option value="রূপগঞ্জ">রূপগঞ্জ</option><option value="সোনারগাঁ">সোনারগাঁ</option><option value="Melandaha">Melandaha</option><option value="Sarishabari">Sarishabari</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'কিশোরগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="ভৈরব">ভৈরব</option><option value="কিশোরগঞ্জ সদর">কিশোরগঞ্জ সদর</option><option value="ইটনা">ইটনা</option><option value="কটিয়াদী">কটিয়াদী</option><option value="তাড়াইল">তাড়াইল</option><option value="হোসেনপুর">হোসেনপুর</option><option value="পাকুন্দিয়া">পাকুন্দিয়া</option><option value="কুলিয়ারচর">কুলিয়ারচর</option><option value="করিমগঞ্জ">করিমগঞ্জ</option><option value="বাজিতপুর">বাজিতপুর</option><option value="অষ্টগ্রাম">অষ্টগ্রাম</option><option value="মিঠামইন">মিঠামইন</option><option value="নিকলী">নিকলী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'মানিকগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="হরিরামপুর">হরিরামপুর</option><option value="মানিকগঞ্জ সদর">মানিকগঞ্জ সদর</option><option value="সাটুরিয়া">সাটুরিয়া</option><option value="ঘিওর">ঘিওর</option><option value="সিংগাইর">সিংগাইর</option><option value="শিবালয়">শিবালয়</option><option value="দৌলতপুর">দৌলতপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'মুন্সিগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="শ্রীনগর">শ্রীনগর</option><option value="মুন্সিগঞ্জ সদর">মুন্সিগঞ্জ সদর</option><option value="সিরাজদিখান">সিরাজদিখান</option><option value="লৌহজং">লৌহজং</option><option value="গজারিয়া">গজারিয়া</option><option value="টংগীবাড়ি">টংগীবাড়ি</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'গোপালগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="টুংগীপাড়া">টুংগীপাড়া</option><option value="গোপালগঞ্জ সদর">গোপালগঞ্জ সদর</option><option value="কাশিয়ানী">কাশিয়ানী</option><option value="কোটালীপাড়া">কোটালীপাড়া</option><option value="মুকসুদপুর">মুকসুদপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'টাঙ্গাইল') {
		var thanaList = '<option value="">Select One</option><option value="মির্জাপুর">মির্জাপুর</option><option value="টাঙ্গাইল সদর">টাঙ্গাইল সদর</option><option value="বাসাইল">বাসাইল</option><option value="ভুয়াপুর">ভুয়াপুর</option><option value="দেলদুয়ার">দেলদুয়ার</option><option value="ঘাটাইল">ঘাটাইল</option><option value="গোপালপুর">গোপালপুর</option><option value="মধুপুর">মধুপুর</option><option value="নাগরপুর">নাগরপুর</option><option value="সখিপুর">সখিপুর</option><option value="কালিহাতী">কালিহাতী</option><option value="ধনবাড়ী">ধনবাড়ী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'রাজবাড়ী') {
		var thanaList = '<option value="">Select One</option><option value="গোয়ালন্দ">গোয়ালন্দ</option><option value="রাজবাড়ী সদর">রাজবাড়ী সদর</option><option value="পাংশা">পাংশা</option><option value="বালিয়াকান্দি">বালিয়াকান্দি</option><option value="কালুখালী">কালুখালী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'মাদারীপুর') {
		var thanaList = '<option value="">Select One</option><option value="শিবচর">শিবচর</option><option value="মাদারীপুর সদর">মাদারীপুর সদর</option><option value="কালকিনি">কালকিনি</option><option value="রাজৈর">রাজৈর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'খুলনা') {
		var thanaList = '<option value="">Select One</option><option value="পাইকগাছা">পাইকগাছা</option><option value="ফুলতলা">ফুলতলা</option><option value="দিঘলিয়া">দিঘলিয়া</option><option value="রূপসা">রূপসা</option><option value="তেরখাদা">তেরখাদা</option><option value="ডুমুরিয়া">ডুমুরিয়া</option><option value="বটিয়াঘাটা">বটিয়াঘাটা</option><option value="দাকোপ">দাকোপ</option><option value="কয়রা">কয়রা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'যশোর') {
		var thanaList = '<option value="">Select One</option><option value="মণিরামপুর">মণিরামপুর</option><option value="যশোর সদর">যশোর সদর</option><option value="অভয়নগর">অভয়নগর</option><option value="বাঘারপাড়া">বাঘারপাড়া</option><option value="চৌগাছা">চৌগাছা</option><option value="ঝিকরগাছা">ঝিকরগাছা</option><option value="কেশবপুর">কেশবপুর</option><option value="শার্শা">শার্শা</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'সাতক্ষীরা') {
		var thanaList = '<option value="">Select One</option><option value="আশাশুনি">আশাশুনি</option><option value="সাতক্ষীরা সদর">সাতক্ষীরা সদর</option><option value="দেবহাটা">দেবহাটা</option><option value="কলারোয়া">কলারোয়া</option><option value="শ্যামনগর">শ্যামনগর</option><option value="তালা">তালা</option><option value="কালিগঞ্জ">কালিগঞ্জ</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'মেহেরপুর') {
		var thanaList = '<option value="">Select One</option><option value="মুজিবনগর">মুজিবনগর</option><option value="মেহেরপুর সদর">মেহেরপুর সদর</option><option value="গাংনী">গাংনী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'নড়াইল') {
		var thanaList = '<option value="">Select One</option><option value="লোহাগড়া">লোহাগড়া</option><option value="নড়াইল সদর">নড়াইল সদর</option><option value="কালিয়া">কালিয়া</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'চুয়াডাঙ্গা') {
		var thanaList = '<option value="">Select One</option><option value="আলমডাঙ্গা">আলমডাঙ্গা</option><option value="চুয়াডাঙ্গা সদর">চুয়াডাঙ্গা সদর</option><option value="দামুড়হুদা">দামুড়হুদা</option><option value="জীবননগর">জীবননগর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'কুষ্টিয়া') {
		var thanaList = '<option value="">Select One</option><option value="ভেড়ামারা">ভেড়ামারা</option><option value="কুষ্টিয়া সদর">কুষ্টিয়া সদর</option><option value="কুমারখালী">কুমারখালী</option><option value="খোকসা">খোকসা</option><option value="মিরপুর">মিরপুর</option><option value="দৌলতপুর">দৌলতপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'মাগুরা') {
		var thanaList = '<option value="">Select One</option><option value="শালিখা">শালিখা</option><option value="মাগুরা সদর">মাগুরা সদর</option><option value="শ্রীপুর">শ্রীপুর</option><option value="মহম্মদপুর">মহম্মদপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'বাগেরহাট') {
		var thanaList = '<option value="">Select One</option><option value="ফকিরহাট">ফকিরহাট</option><option value="বাগেরহাট সদর">বাগেরহাট সদর</option><option value="মোল্লাহাট">মোল্লাহাট</option><option value="শরণখোলা">শরণখোলা</option><option value="রামপাল">রামপাল</option><option value="মোড়েলগঞ্জ">মোড়েলগঞ্জ</option><option value="কচুয়া">কচুয়া</option><option value="মোংলা">মোংলা</option><option value="চিতলমারী">চিতলমারী</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'ঝিনাইদহ') {
		var thanaList = '<option value="">Select One</option><option value="কালীগঞ্জ">কালীগঞ্জ</option><option value="ঝিনাইদহ সদর">ঝিনাইদহ সদর</option><option value="শৈলকুপা">শৈলকুপা</option><option value="হরিণাকুন্ডু">হরিণাকুন্ডু</option><option value="কোটচাঁদপুর">কোটচাঁদপুর</option><option value="মহেশপুর">মহেশপুর</option><option value="অন্যান্য">অন্যান্য</option>';
	}
	if(DisList == 'রাজশাহী') {
		var thanaList = '<option value="">Select One</option><option value="Atrai">Atrai</option><option value="Badalgachhi">Badalgachhi</option><option value="Dhamoirhat">Dhamoirhat</option><option value="Mahadebpur">Mahadebpur</option><option value="Manda">Manda</option><option value="Naogaon Sadar">Naogaon Sadar</option><option value="Niamatpur">Niamatpur</option><option value="Patnitala">Patnitala</option><option value="Porsha">Porsha</option><option value="Raninagar">Raninagar</option><option value="Sapahar">Sapahar</option><option value="Others">Others</option>';
	}
	if(DisList == 'সিরাজগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="Kalia">Kalia</option><option value="Lohagara">Lohagara</option><option value="NarailSadar">NarailSadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'পাবনা') {
		var thanaList = '<option value="">Select One</option><option value="Araihazar">Araihazar</option><option value="Bandar">Bandar</option><option value="Narayanganj Sadar">Narayanganj Sadar</option><option value="Rupganj">Rupganj</option><option value="Siddirganj">Siddirganj</option><option value="Sonargaon">Sonargaon</option><option value="Others">Others</option>';
	}
	if(DisList == 'বগুড়া') {
		var thanaList = '<option value="">Select One</option><option value="Belabo">Belabo</option><option value="Manohardi">Manohardi</option><option value="Narsingdi Sadar">Narsingdi Sadar</option><option value="Palash">Palash</option><option value="Roypura">Roypura</option><option value="Shibpur">Shibpur</option><option value="Others">Others</option>';
	}
	if(DisList == 'নাটোর') {
		var thanaList = '<option value="">Select One</option><option value="Bagati Para">Bagati Para</option><option value="Baraigram">Baraigram</option><option value="Gurudaspur">Gurudaspur</option><option value="Lalpur">Lalpur</option><option value="Naldanga">Naldanga</option><option value="Natore Sadar">Natore Sadar</option><option value="Singra">Singra</option><option value="Others">Others</option>';
	}
	if(DisList == 'জয়পুরহাট') {
		var thanaList = '<option value="">Select One</option><option value="Atpara">Atpara</option><option value="Barhatta">Barhatta</option><option value="Durgapur">Durgapur</option><option value="Kalmakanda">Kalmakanda</option><option value="Kendua">Kendua</option><option value="Khaliajuri">Khaliajuri</option><option value="Madan">Madan</option><option value="Mohanganj">Mohanganj</option><option value="Netrokona Sadar">Netrokona Sadar</option><option value="Purbadhala">Purbadhala</option><option value="Others">Others</option>';
	}
	if(DisList == 'চাঁপাইনবাবগঞ্জ') {
		var thanaList = '<option value="">Select One</option><option value="Dimla">Dimla</option><option value="Domar">Domar</option><option value="Jaldhaka">Jaldhaka</option><option value="Kishoreganj ">Kishoreganj </option><option value="Nilphamari Sadar">Nilphamari Sadar</option><option value="Saidpur">Saidpur</option><option value="Others">Others</option>';
	}
	if(DisList == 'নওগাঁ') {
		var thanaList = '<option value="">Select One</option><option value="Begumganj">Begumganj</option><option value="Chatkhil">Chatkhil</option><option value="Companiganj">Companiganj</option><option value="Hatiya">Hatiya</option><option value="Kobirhat">Kobirhat</option><option value="Noakhali Sadar (Sudharam)">Noakhali Sadar (Sudharam)</option><option value="Senbagh">Senbagh</option><option value="Sonaimuri">Sonaimuri</option><option value="Subornachhar">Subornachhar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Pabna') {
		var thanaList = '<option value="">Select One</option><option value="Atgharia">Atgharia</option><option value="Bera">Bera</option><option value="Bhangura">Bhangura</option><option value="Chatmohar">Chatmohar</option><option value="Faridpur">Faridpur</option><option value="Ishwardi">Ishwardi</option><option value="Pabna Sadar">Pabna Sadar</option><option value="Santhia">Santhia</option><option value="Sujanagar">Sujanagar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Panchagarh') {
		var thanaList = '<option value="">Select One</option><option value="Atwari">Atwari</option><option value="Boda">Boda</option><option value="Debiganj">Debiganj</option><option value="Panchagarh Sadar">Panchagarh Sadar</option><option value="Tentulia">Tentulia</option><option value="Others">Others</option>';
	}
	if(DisList == 'Patuakhali') {
		var thanaList = '<option value="">Select One</option><option value="Bauphal">Bauphal</option><option value="Dashmina">Dashmina</option><option value="Dumki">Dumki</option><option value="Galachipa">Galachipa</option><option value="Kala Para">Kala Para</option><option value="Mirzaganj">Mirzaganj</option><option value="Patuakhali Sadar">Patuakhali Sadar</option><option value="Rangabali">Rangabali</option><option value="Others">Others</option>';
	}
	if(DisList == 'Pirojpur') {
		var thanaList = '<option value="">Select One</option><option value="Bhandaria">Bhandaria</option><option value="Indurkani">Indurkani</option><option value="Kawkhali">Kawkhali</option><option value="Mathbaria">Mathbaria</option><option value="Nazirpur">Nazirpur</option><option value="Nesarabad (Swarupkati)">Nesarabad (Swarupkati)</option><option value="Pirojpur Sadar">Pirojpur Sadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Rajbari') {
		var thanaList = '<option value="">Select One</option><option value="Balia Kandi">Balia Kandi</option><option value="Goalandaghat">Goalandaghat</option><option value="Kalukhali">Kalukhali</option><option value="Pangsha">Pangsha</option><option value="Rajbari Sadar">Rajbari Sadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Rajshahi') {
		var thanaList = '<option value="">Select One</option><option value="Balia Kandi">Balia Kandi</option><option value="Goalandaghat">Goalandaghat</option><option value="Kalukhali">Kalukhali</option><option value="Pangsha">Pangsha</option><option value="Rajbari Sadar">Rajbari Sadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Rangamati') {
		var thanaList = '<option value="">Select One</option><option value="Bagaichhari">Bagaichhari</option><option value="Barkal">Barkal</option><option value="Belaichhari">Belaichhari</option><option value="Juraichhari">Juraichhari</option><option value="Kaptai">Kaptai</option><option value="Kawkhali (Betbunia)">Kawkhali (Betbunia)</option><option value="Langadu">Langadu</option><option value="Naniarchar">Naniarchar</option><option value="Rajasthali">Rajasthali</option><option value="Rangamati Sadar">Rangamati Sadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Rangpur') {
		var thanaList = '<option value="">Select One</option><option value="Badarganj">Badarganj</option><option value="Gangachara">Gangachara</option><option value="Kaunia">Kaunia</option><option value="Mitha Pukur">Mitha Pukur</option><option value="Pirgachha">Pirgachha</option><option value="Pirganj">Pirganj</option><option value="Rangpur Sadar">Rangpur Sadar</option><option value="Taraganj">Taraganj</option><option value="Others">Others</option>';
	}
	if(DisList == 'Satkhira') {
		var thanaList = '<option value="">Select One</option><option value="Assasuni">Assasuni</option><option value="Debhata">Debhata</option><option value="Kalaroa">Kalaroa</option><option value="Kaliganj">Kaliganj</option><option value="Satkhira Sadar">Satkhira Sadar</option><option value="Shyamnagar">Shyamnagar</option><option value="Tala">Tala</option><option value="Others">Others</option>';
	}
	if(DisList == 'Shariatpur') {
		var thanaList = '<option value="">Select One</option><option value="Bhaderganj">Bhaderganj</option><option value="Damudya">Damudya</option><option value="Gosairhat">Gosairhat</option><option value="Naria">Naria</option><option value="Palong(Sadar)">Palong(Sadar)</option><option value="Zanjira">Zanjira</option><option value="Others">Others</option>';
	}
	if(DisList == 'Sherpur') {
		var thanaList = '<option value="">Select One</option><option value="Jhenaigati">Jhenaigati</option><option value="Nakla">Nakla</option><option value="Nalitabari">Nalitabari</option><option value="Sherpur Sadar">Sherpur Sadar</option><option value="Sreebardi">Sreebardi</option><option value="Others">Others</option>';
	}
	if(DisList == 'Sirajganj') {
		var thanaList = '<option value="">Select One</option><option value="Belkuchi">Belkuchi</option><option value="Chauhali">Chauhali</option><option value="Kamarkhanda">Kamarkhanda</option><option value="Kazipur">Kazipur</option><option value="Royganj">Royganj</option><option value="Shahjadpur">Shahjadpur</option><option value="Sirajganj Sadar">Sirajganj Sadar</option><option value="Tarash">Tarash</option><option value="Ullah Para">Ullah Para</option><option value="Others">Others</option>';
	}
	if(DisList == 'Sunamganj') {
		var thanaList = '<option value="">Select One</option><option value="Bishwambarpur">Bishwambarpur</option><option value="Chhatak">Chhatak</option><option value="Daxin Sunamganj">Daxin Sunamganj</option><option value="Derai">Derai</option><option value="Dharampasha">Dharampasha</option><option value="Dowarabazar">Dowarabazar</option><option value="Jagannatpur">Jagannatpur</option><option value="Jamalganj">Jamalganj</option><option value="Sulla">Sulla</option><option value="Sunamganj Sadar">Sunamganj Sadar</option><option value="Tahirpur">Tahirpur</option><option value="Others">Others</option>';
	}
	if(DisList == 'Sylhet') {
		var thanaList = '<option value="">Select One</option><option value="Balaganj">Balaganj</option><option value="Beani Bazar">Beani Bazar</option><option value="Bishwanath">Bishwanath</option><option value="Companiganj">Companiganj</option><option value="Fenchuganj">Fenchuganj</option><option value="Golabganj">Golabganj</option><option value="Gowainghat">Gowainghat</option><option value="Jaintiapur">Jaintiapur</option><option value="Kanaighat">Kanaighat</option><option value="Kowtali">Kowtali</option><option value="South Surma">South Surma</option><option value="Zakirganj">Zakirganj</option><option value="Others">Others</option>';
	}
	if(DisList == 'Tangail') {
		var thanaList = '<option value="">Select One</option><option value="Basail">Basail</option><option value="Bhuapur">Bhuapur</option><option value="Delduar">Delduar</option><option value="Dhonbari">Dhonbari</option><option value="Ghatail">Ghatail</option><option value="Gopalpur">Gopalpur</option><option value="Kalihati">Kalihati</option><option value="Madhupur">Madhupur</option><option value="Mirzapur">Mirzapur</option><option value="Nagarpur">Nagarpur</option><option value="Sakhipur">Sakhipur</option><option value="Tangail Sadar">Tangail Sadar</option><option value="Others">Others</option>';
	}
	if(DisList == 'Thakurgaon') {
		var thanaList = '<option value="">Select One</option><option value="Baliadangi">Baliadangi</option><option value="Haripur">Haripur</option><option value="Pirganj">Pirganj</option><option value="Ranisankail">Ranisankail</option><option value="Thakurgaon Sadar">Thakurgaon Sadar</option><option value="Others">Others</option>';
	}
	

	document.getElementById("upo").innerHTML= thanaList;
}