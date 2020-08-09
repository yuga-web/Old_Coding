%seqsample=fastaread('skincancer5557.fasta','ignoregaps',true)
%seqtest=fastaread('skincancer1303.fasta','ignoregaps',true)
%[score,alignment]=swalign('AAAAAAAAA','AAAAGGGG','scoringmatrix','blosum62','showscore','true')
[score,alignment]=swalign('AGTCTCATGC','AGCTC','scoringmatrix','blosum62','showscore','true')
%disp(score);
%disp(alignment);

